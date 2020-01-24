<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    protected $userRepository;

    protected $nbrPerPage = 4;

    public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	public function index(User $user)
	{
		$users = $this->userRepository;
        //$links = $users->render();
        return $user ->get();
        //return $users->render();
		//return view('index', compact('users', 'links'));
	}

	public function create()
	{
		return view('create');
	}

	public function store(UserCreateRequest $request)
	{ 
		$this->setAdmin($request);

		$user = $this->userRepository->store($request->all());

		return $user ;
	}

	public function show($id)
	{
		$user = $this->userRepository->getById($id);

		return $user;
	}

	public function edit($id)
	{
		$user = $this->userRepository->getById($id);

		return view('edit',  compact('user'));
	}

	public function update(UserUpdateRequest $request, $id)
	{	
		$this->setAdmin($request);
		$this->userRepository->update($id, $request->all());
		$user = $this->userRepository->getById($id);
		
		return $user;
	}

	public function destroy($id)
	{
		$user = $this->userRepository->getById($id);
		$this->userRepository->destroy($id);
        return $user;
	}

	private function setAdmin($request)
	{
		if(!$request->has('admin'))
		{
			$request->merge(['admin' => 0]);
		}		
	}
}
