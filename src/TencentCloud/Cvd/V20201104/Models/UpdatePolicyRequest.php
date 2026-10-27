<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePolicy请求参数结构体
 *
 * @method string getPolicyId() 获取<p>待更新策略id</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>待更新策略id</p>
 * @method string getName() 获取<p>更新策略后策略名称</p>
 * @method void setName(string $Name) 设置<p>更新策略后策略名称</p>
 * @method string getDescription() 获取<p>更新策略后策略描述</p>
 * @method void setDescription(string $Description) 设置<p>更新策略后策略描述</p>
 * @method array getPolicyInfoList() 获取<p>更新策略的具体修改值（全集）</p>
 * @method void setPolicyInfoList(array $PolicyInfoList) 设置<p>更新策略的具体修改值（全集）</p>
 * @method array getBindUserIds() 获取<p>新增绑定用户列表</p>
 * @method void setBindUserIds(array $BindUserIds) 设置<p>新增绑定用户列表</p>
 * @method array getRemoveUserIds() 获取<p>移除绑定的用户列表</p>
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置<p>移除绑定的用户列表</p>
 */
class UpdatePolicyRequest extends AbstractModel
{
    /**
     * @var string <p>待更新策略id</p>
     */
    public $PolicyId;

    /**
     * @var string <p>更新策略后策略名称</p>
     */
    public $Name;

    /**
     * @var string <p>更新策略后策略描述</p>
     */
    public $Description;

    /**
     * @var array <p>更新策略的具体修改值（全集）</p>
     */
    public $PolicyInfoList;

    /**
     * @var array <p>新增绑定用户列表</p>
     */
    public $BindUserIds;

    /**
     * @var array <p>移除绑定的用户列表</p>
     */
    public $RemoveUserIds;

    /**
     * @param string $PolicyId <p>待更新策略id</p>
     * @param string $Name <p>更新策略后策略名称</p>
     * @param string $Description <p>更新策略后策略描述</p>
     * @param array $PolicyInfoList <p>更新策略的具体修改值（全集）</p>
     * @param array $BindUserIds <p>新增绑定用户列表</p>
     * @param array $RemoveUserIds <p>移除绑定的用户列表</p>
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PolicyInfoList",$param) and $param["PolicyInfoList"] !== null) {
            $this->PolicyInfoList = [];
            foreach ($param["PolicyInfoList"] as $key => $value){
                $obj = new PolicyInfo();
                $obj->deserialize($value);
                array_push($this->PolicyInfoList, $obj);
            }
        }

        if (array_key_exists("BindUserIds",$param) and $param["BindUserIds"] !== null) {
            $this->BindUserIds = $param["BindUserIds"];
        }

        if (array_key_exists("RemoveUserIds",$param) and $param["RemoveUserIds"] !== null) {
            $this->RemoveUserIds = $param["RemoveUserIds"];
        }
    }
}
