<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Group</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>tailwind.config = { theme: { extend: { colors: { primary: '#4DABDD', secondary: '#6B7280' }, borderRadius: { 'none': '0px', 'sm': '4px', DEFAULT: '8px', 'md': '12px', 'lg': '16px', 'xl': '20px', '2xl': '24px', '3xl': '32px', 'full': '9999px', 'button': '8px' } } } }</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        @import url('https://fonts.cdnfonts.com/css/agbalumo');
        .fam{
            font-family: 'Agbalumo', sans-serif !important;
        }
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        body {
            background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='88' height='88' viewBox='0 0 88 88'%3E%3Cg fill='%23c1dedf' fill-opacity='0.08'%3E%3Cpath fill-rule='evenodd' d='M29.42 29.41c.36-.36.58-.85.58-1.4V0h-4v26H0v4h28c.55 0 1.05-.22 1.41-.58h.01zm0 29.18c.36.36.58.86.58 1.4V88h-4V62H0v-4h28c.56 0 1.05.22 1.41.58zm29.16 0c-.36.36-.58.85-.58 1.4V88h4V62h26v-4H60c-.55 0-1.05.22-1.41.58h-.01zM62 26V0h-4v28c0 .55.22 1.05.58 1.41.37.37.86.59 1.41.59H88v-4H62zM18 36c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H20a2 2 0 0 1-2-2zm0 16c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H20a2 2 0 0 1-2-2zm16-26a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zM34 58a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zM34 78a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-6zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-6zM34 4a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4zm-8 82a2 2 0 1 1 4 0v2h-4v-2zm0-68a2 2 0 1 1 4 0v10a2 2 0 1 1-4 0V18zM66 4a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0V4zm0 72a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0v-8zm-48 0a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0v-8zm0-72a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0V4zm24-4h4v2a2 2 0 1 1-4 0V0zm0 60a2 2 0 1 1 4 0v10a2 2 0 1 1-4 0V60zm14-24c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H58a2 2 0 0 1-2-2zm0 16c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H58a2 2 0 0 1-2-2zm-28-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm8 26a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM36 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm-8-8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 68a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16-34a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16-12a2 2 0 1 0 0 4 6 6 0 1 1 0 12 2 2 0 1 0 0 4 10 10 0 1 0 0-20zm-64 0a2 2 0 1 1 0 4 6 6 0 1 0 0 12 2 2 0 1 1 0 4 10 10 0 1 1 0-20zm56-12a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 48a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm-48 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0-48a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm24 32a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-4a6 6 0 1 0 0-12 6 6 0 0 0 0 12zm36-36a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM10 44c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zm56 0c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zm8 24c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zM3 68c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4H5a2 2 0 0 1-2-2zm0-48c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4H5a2 2 0 0 1-2-2zm71 0c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zm6 66a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM8 86a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0-68A6 6 0 1 1 8 2a6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm36 36a2 2 0 1 0 0-4 2 2 0 0 0 0 4z'/%3E%3C/g%3E%3C/svg%3E");
            font-family: 'Inter', sans-serif;
        }

        input,
        textarea {
            outline: none;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

    </style>
</head>

<body class="min-h-screen">
    <div class="container mx-auto px-4 sm:px-6 py-4 sm:py-8 max-w-6xl">
        <a href="index.php " class="w-fit flex items-center bg-primary p-3 text-gray-600 border-2 border-primary hover:bg-white hover:text-primary transition-colors mb-6 rounded-lg">
            <div class="w-5 h-5 flex items-center justify-center mr-1">
                <i class="ri-arrow-left-line"></i>
            </div>
            <span>Back</span>
        </a>
        <div class="text-center mb-6 sm:mb-8">
            <h1 class="text-4xl sm:text-5xl font-bold flex items-center justify-center gap-2 mb-3 sm:mb-4 fam">
                Create Your Group
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Fill out the forms below to start organizing your group. Our platform will help you manage all the
                details efficiently.
            </p>
        </div>
        <div class="flex justify-center mb-10">
            <div class="flex items-center">
                <div id="step1"
                    class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-medium">1
                </div>
                <div class="w-16 h-1 bg-gray-200" id="step-connector"></div>
                <div id="step2"
                    class="w-8 h-8 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-medium">
                    2</div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-4 sm:p-8 mb-8 bg">
            <!-- Form 1: Group Details -->
             <!-- <form action="process_create_group.php" method="POST" id="groupForm"> -->
            <div id="form1" class="transition-opacity duration-300">
                <div class="mb-6">
                    <label class="block mb-2 font-medium">
                        Group Name <span class="text-red-500">*</span>
                    </label>
                    <p class="text-sm text-gray-500 mb-2">Give your Group a name</p>
                    <input type="text" id="groupName"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:border-primary"
                        placeholder="e.g., Event, Travel, Project">
                    <p id="groupNameError" class="text-red-500 text-sm mt-1 hidden">Group name is required</p>
                </div>
                <div class="mb-8">
                    <label class="block mb-2 font-medium">Group Description</label>
                    <textarea id="groupDescription"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:border-primary h-32"
                        placeholder="Briefly describe your group plans and goals..."></textarea>
                </div>
                <div class="flex justify-end">
                    <button id="nextBtn"
                        class="bg-primary text-white px-4 sm:px-6 py-2.5 sm:py-3 rounded flex items-center !rounded-button whitespace-nowrap w-full sm:w-auto justify-center">
                        Next
                        <div class="w-5 h-5 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </button>
                </div>
            </div>
            <!-- </form> -->
            <!-- Form 2: Group Members -->
             <!-- <form action="process_create_group_roles.php" method="POST"> -->
            <div id="form2" class="hidden transition-opacity duration-300">
                <h3 class="text-xl font-medium mb-2">Add Group Members</h3>
                <div class="bg-blue-50 text-blue-700 p-3 rounded mb-6 flex items-center">
                    <div class="w-5 h-5 flex items-center justify-center mr-2">
                        <i class="ri-information-line"></i>
                    </div>
                    <p class="text-sm">Only one member can be assigned as Admin</p>
                </div>
                <div class="bg-blue-50 text-blue-700 p-3 rounded mb-6 flex items-center">
                    <div class="w-5 h-5 flex items-center justify-center mr-2">
                        <i class="ri-information-line"></i>
                    </div>
                    <p class="text-sm">Only Registered Users Can Add In Group</p>
                </div>
                <div id="memberInputs">
                    <div class="member-row flex flex-wrap gap-3 sm:gap-4 mb-4">
                        <div class="flex-1 min-w-full sm:min-w-[200px]">
                            <label class="block mb-2 text-sm font-medium">Username</label>
                            <div class="relative">
                                <input type="text"
                                
                                    class="username-input w-full px-4 py-3 border border-gray-300 rounded focus:border-primary"
                                    placeholder="Enter username">
                                <div
                                    class="suggestions-dropdown absolute left-0 right-0 top-full mt-1 bg-white border border-gray-200 rounded shadow-lg z-10 hidden max-h-48 overflow-y-auto">
                                </div>
                            </div>
                            <p class="username-error text-red-500 text-sm mt-1 hidden">Username is required</p>
                        </div>
                        <div class="flex-1 min-w-full sm:min-w-[200px]">
                            <label class="block mb-2 text-sm font-medium">Role</label>
                            <div class="relative">
                                <select
                                    class="role-input w-full px-4 py-3 border border-gray-300 rounded focus:border-primary appearance-none pr-8">
                                    <option value="None" selected>None</option>
                                    <option value="Admin">Admin</option>
                                </select>
                                <div
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center pointer-events-none text-gray-500">
                                    <i class="ri-arrow-down-s-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-16">
                            <label class="block mb-2 text-sm font-medium opacity-0">Action</label>
                            <button
                                class="remove-member bg-red-50 hover:bg-red-100 text-red-500 transition-colors w-full px-4 py-3 rounded !rounded-button flex items-center justify-center">
                                <div class="w-5 h-5 flex items-center justify-center">
                                    <i class="ri-delete-bin-line"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <button id="addMemberBtn" class="text-primary flex items-center mb-8 !rounded-button whitespace-nowrap">
                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                        <i class="ri-add-line"></i>
                    </div>
                    Add Another Member
                </button>
                <div id="membersList" class="mb-8">
                    <h4 class="font-medium mb-3">Group Members</h4>
                    <div id="membersContainer" class="border border-gray-200 rounded-lg p-4 bg-gray-50 min-h-20">
                        <p id="noMembersMessage" class="text-gray-500 text-center py-4">No members added yet</p>
                        <ul id="memberList" class="hidden"></ul>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-0 sm:justify-between">
                    <button id="backBtn"
                        class="border border-gray-300 text-gray-600 px-4 sm:px-6 py-2.5 sm:py-3 rounded flex items-center justify-center sm:justify-start !rounded-button whitespace-nowrap w-full sm:w-auto">
                        <div class="w-5 h-5 flex items-center justify-center mr-1">
                            <i class="ri-arrow-left-line"></i>
                        </div>
                        Back
                    </button>
                    <button id="submitBtn"
                        class="bg-primary text-white px-4 sm:px-6 py-2.5 sm:py-3 rounded flex items-center justify-center sm:justify-start !rounded-button whitespace-nowrap w-full sm:w-auto">
                        Create Group
                        <div class="w-5 h-5 flex items-center justify-center ml-1">
                            <i class="ri-check-line"></i>
                        </div>
                    </button>
                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mockUsernames = [
                "emma.wilson", "james.smith", "sophia.brown", "oliver.jones",
                "ava.taylor", "william.anderson", "isabella.martinez", "lucas.garcia",
                "mia.rodriguez", "henry.miller", "charlotte.davis", "alexander.moore",
                "amelia.jackson", "benjamin.white", "harper.thompson", "sebastian.lee"
            ];
            function setupUsernameAutocomplete(input) {
                const suggestionsDropdown = input.parentElement.querySelector('.suggestions-dropdown');
                input.addEventListener('input', function () {
                    const value = this.value.toLowerCase();
                    if (value.length < 1) {
                        suggestionsDropdown.classList.add('hidden');
                        return;
                    }
                    // Get all currently used usernames
                    const usedUsernames = new Set();
                    document.querySelectorAll('.username-input').forEach(otherInput => {
                        if (otherInput !== input && otherInput.value.trim()) {
                            usedUsernames.add(otherInput.value.trim().toLowerCase());
                        }
                    });
                    // Filter out already used usernames
                    const filteredUsernames = mockUsernames.filter(username =>
                        username.toLowerCase().includes(value) && !usedUsernames.has(username.toLowerCase())
                    );
                    if (filteredUsernames.length > 0) {
                        suggestionsDropdown.innerHTML = filteredUsernames
                            .map(username => `
<div class="suggestion-item px-4 py-2 hover:bg-gray-100 cursor-pointer">
<div class="flex items-center">
<div class="w-6 h-6 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 mr-2">
<i class="ri-user-line text-sm"></i>
</div>
<span>${username}</span>
</div>
</div>
`).join('');
                        suggestionsDropdown.classList.remove('hidden');
                        const suggestionItems = suggestionsDropdown.querySelectorAll('.suggestion-item');
                        suggestionItems.forEach(item => {
                            item.addEventListener('click', function () {
                                input.value = this.querySelector('span').textContent;
                                suggestionsDropdown.classList.add('hidden');
                                updateMembersList();
                            });
                        });
                    } else {
                        suggestionsDropdown.classList.add('hidden');
                    }
                });
                document.addEventListener('click', function (e) {
                    if (!input.contains(e.target) && !suggestionsDropdown.contains(e.target)) {
                        suggestionsDropdown.classList.add('hidden');
                    }
                });
            }
            function setupAllUsernameInputs() {
                document.querySelectorAll('.username-input').forEach(input => {
                    setupUsernameAutocomplete(input);
                });
            }
            // Initial setup
            setupAllUsernameInputs();
            // Add member row function - updated
            function addMemberRow() {
                const newRow = document.querySelector('.member-row').cloneNode(true);
                const inputs = newRow.querySelectorAll('input, select');
                inputs.forEach(input => {
                    input.value = '';
                    if (input.classList.contains('username-input')) {
                        const suggestionsDropdown = input.parentElement.querySelector('.suggestions-dropdown');
                        suggestionsDropdown.innerHTML = '';
                        suggestionsDropdown.classList.add('hidden');
                    }
                });
                memberInputs.appendChild(newRow);
                setupRemoveButton();
                setupUsernameAutocomplete(newRow.querySelector('.username-input'));
                updateMembersList();
            }
            const form1 = document.getElementById('form1');
            const form2 = document.getElementById('form2');
            const nextBtn = document.getElementById('nextBtn');
            const backBtn = document.getElementById('backBtn'); 
            const step1 = document.getElementById('step1');
            const step2 = document.getElementById('step2');
            const stepConnector = document.getElementById('step-connector');
            const groupName = document.getElementById('groupName');
            const groupNameError = document.getElementById('groupNameError');
            const addMemberBtn = document.getElementById('addMemberBtn');
            const memberInputs = document.getElementById('memberInputs');
            const noMembersMessage = document.getElementById('noMembersMessage');
            const memberList = document.getElementById('memberList');
            // Handle next button click
            nextBtn.addEventListener('click', function () {
                if (validateForm1()) {
                    form1.classList.add('hidden');
                    form2.classList.remove('hidden');
                    step2.classList.remove('bg-gray-200', 'text-gray-600');
                    step2.classList.add('bg-primary', 'text-white');
                    stepConnector.classList.remove('bg-gray-200');
                    stepConnector.classList.add('bg-primary');
                }
            });
            // Handle back button click
            backBtn.addEventListener('click', function () {
                form2.classList.add('hidden');
                form1.classList.remove('hidden');
                step2.classList.add('bg-gray-200', 'text-gray-600');
                step2.classList.remove('bg-primary', 'text-white');
                stepConnector.classList.add('bg-gray-200');
                stepConnector.classList.remove('bg-primary');
            });
            // Validate form 1
            function validateForm1() {
                if (groupName.value.trim() === '') {
                    groupNameError.classList.remove('hidden');
                    return false;
                } else {
                    groupNameError.classList.add('hidden');
                    return true;
                }
            }
            // Add member button click
            addMemberBtn.addEventListener('click', function () {
                addMemberRow();
            });
            // Initial member row
            setupRemoveButton();
            // Add member row function
            function addMemberRow() {
                const newRow = document.querySelector('.member-row').cloneNode(true);
                const inputs = newRow.querySelectorAll('input, select');
                inputs.forEach(input => input.value = '');
                memberInputs.appendChild(newRow);
                setupRemoveButton();
                setupUsernameAutocomplete(newRow.querySelector('.username-input'));
                updateMembersList();
            }
            // Setup remove buttons
            function setupRemoveButton() {
                const removeButtons = document.querySelectorAll('.remove-member');
                removeButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        if (document.querySelectorAll('.member-row').length > 1) {
                            this.closest('.member-row').remove();
                            updateMembersList();
                        }
                    });
                });
            }
            // Update members list when inputs change
            document.addEventListener('input', function (e) {
                if (e.target.classList.contains('username-input') || e.target.classList.contains('role-input')) {
                    if (e.target.classList.contains('role-input')) {
                        handleRoleChange(e.target);
                    }
                    if (e.target.classList.contains('username-input')) {
                        validateUsername(e.target);
                    }
                    updateMembersList();
                }
            });
            function validateUsername(input) {
                const error = input.parentElement.querySelector('.username-error');
                if (input.value.trim() === '') {
                    error.classList.remove('hidden');
                } else {
                    error.classList.add('hidden');
                }
            }
            function handleRoleChange(selectElement) {
                const allRoleSelects = document.querySelectorAll('.role-input');
                const adminExists = Array.from(allRoleSelects).some(select => select !== selectElement && select.value === 'Admin');
                allRoleSelects.forEach(select => {
                    const adminOption = select.querySelector('option[value="Admin"]');
                    if (select !== selectElement) {
                        if (selectElement.value === 'Admin' || adminExists) {
                            adminOption.disabled = true;
                            if (select.value === 'Admin') {
                                select.value = 'None';
                            }
                        } else {
                            adminOption.disabled = false;
                        }
                    }
                });
            }
            // Update members list
            function updateMembersList() {
                const rows = document.querySelectorAll('.member-row');
                let hasValidMembers = false;
                memberList.innerHTML = '';
                // Get all usernames
                const usedUsernames = new Set();
                rows.forEach(row => {
                    const username = row.querySelector('.username-input').value.trim();
                    if (username) {
                        if (usedUsernames.has(username)) {
                            const errorElement = row.querySelector('.username-error');
                            errorElement.textContent = 'Username already exists';
                            errorElement.classList.remove('hidden');
                        } else {
                            usedUsernames.add(username);
                            const errorElement = row.querySelector('.username-error');
                            errorElement.classList.add('hidden');
                        }
                    }
                });
                rows.forEach(row => {
                    const username = row.querySelector('.username-input').value.trim();
                    const role = row.querySelector('.role-input').value;
                    if (username && role && !isDuplicateUsername(username, row)) {
                        hasValidMembers = true;
                        const listItem = document.createElement('li');
                        listItem.className = 'flex justify-between items-center py-2 border-b border-gray-100 last:border-0';
                        listItem.innerHTML = `
<div class="flex items-center">
<div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 mr-3">
<i class="ri-user-line"></i>
</div>
<div>
<p class="font-medium">${username}</p>
<p class="text-sm text-gray-500">${role}</p>
</div>
</div>
`;
                        memberList.appendChild(listItem);
                    }
                });
                if (hasValidMembers) {
                    noMembersMessage.classList.add('hidden');
                    memberList.classList.remove('hidden');
                } else {
                    noMembersMessage.classList.remove('hidden');
                    memberList.classList.add('hidden');
                }
            }
            function isDuplicateUsername(username, currentRow) {
                const allInputs = document.querySelectorAll('.username-input');
                let count = 0;
                allInputs.forEach(input => {
                    if (input.value.trim() === username) {
                        count++;
                    }
                });
                return count > 1;
            }
            // Submit form
            
        });

// Form submission handler
submitBtn.addEventListener('click', async function(e) {
    e.preventDefault();
    
    // Validate form
    if (!validateForm()) {
        return;
    }
    
    // Show loading state
    submitBtn.disabled = true;
    submitBtn.innerHTML = `
        <div class="animate-spin h-5 w-5 border-2 border-white border-t-transparent rounded-full mr-2"></div>
        Creating Group...
    `;
    
    try {
        // Collect form data
        const formData = new FormData();
        const groupData = {
            groupName: document.getElementById('groupName').value.trim(),
            groupDescription: document.getElementById('groupDescription').value.trim(),
            members: [],
            created_at: '2025-04-12 11:52:32', // Current UTC time
            created_by: 'Rangat001' // Current user
        };
        
        // Collect members data
        document.querySelectorAll('.member-row').forEach(row => {
            const username = row.querySelector('.username-input').value.trim();
            const role = row.querySelector('.role-input').value;
            
            if (username && role) {
                groupData.members.push({ username, role });
            }
        });
        
        // Convert to JSON string
        formData.append('groupName', groupData.groupName);
        formData.append('groupDescription', groupData.groupDescription);
        formData.append('members', JSON.stringify(groupData.members));
        formData.append('created_at', groupData.created_at);
        formData.append('created_by', groupData.created_by);
        
        // Send request
        const response = await fetch('process_create_group.php', {
            method: 'POST',
            body: formData
        });
        
        // Parse response
        const result = await response.json();
        
        if (result.status === 'success') {
            // Store group data in session storage for process page
            sessionStorage.setItem('groupData', JSON.stringify({
                ...groupData,
                group_id: result.data.group_id
            }));
            
            // Redirect to process page
            window.location.href = 'process.php';
        } else {
            throw new Error(result.message || 'Failed to create group');
        }
        
    } catch (error) {
        console.error('Error:', error);
        showNotification('Error', error.message || 'Failed to create group', 'error');
    } finally {
        // Reset button state
        submitBtn.disabled = false;
        submitBtn.innerHTML = `
            Create Group
            <div class="w-5 h-5 flex items-center justify-center ml-1">
                <i class="ri-check-line"></i>
            </div>
        `;
    }
});
    </script>
</body>

</html>