<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountGroup请求参数结构体
 *
 * @method string getAccountGroupId() 获取账号组ID。
 * @method void setAccountGroupId(string $AccountGroupId) 设置账号组ID。
 * @method string getGroupName() 获取账号组名。未传入该参数时，表示不进行修改。
 * @method void setGroupName(string $GroupName) 设置账号组名。未传入该参数时，表示不进行修改。
 * @method string getDescription() 获取描述，未传入该参数时，表示不进行修改。
 * @method void setDescription(string $Description) 设置描述，未传入该参数时，表示不进行修改。
 */
class ModifyAccountGroupRequest extends AbstractModel
{
    /**
     * @var string 账号组ID。
     */
    public $AccountGroupId;

    /**
     * @var string 账号组名。未传入该参数时，表示不进行修改。
     */
    public $GroupName;

    /**
     * @var string 描述，未传入该参数时，表示不进行修改。
     */
    public $Description;

    /**
     * @param string $AccountGroupId 账号组ID。
     * @param string $GroupName 账号组名。未传入该参数时，表示不进行修改。
     * @param string $Description 描述，未传入该参数时，表示不进行修改。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
