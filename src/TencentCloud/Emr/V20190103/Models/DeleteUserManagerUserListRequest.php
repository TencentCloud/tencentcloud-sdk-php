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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUserManagerUserList请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID
 * @method array getUserNameList() 获取集群用户名列表
 * @method void setUserNameList(array $UserNameList) 设置集群用户名列表
 * @method string getTkeClusterId() 获取tke/eks集群id，容器集群传
 * @method void setTkeClusterId(string $TkeClusterId) 设置tke/eks集群id，容器集群传
 * @method string getDisplayStrategy() 获取默认空，容器版传"native"
 * @method void setDisplayStrategy(string $DisplayStrategy) 设置默认空，容器版传"native"
 * @method array getUserGroupList() 获取用户组
 * @method void setUserGroupList(array $UserGroupList) 设置用户组
 */
class DeleteUserManagerUserListRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $InstanceId;

    /**
     * @var array 集群用户名列表
     */
    public $UserNameList;

    /**
     * @var string tke/eks集群id，容器集群传
     */
    public $TkeClusterId;

    /**
     * @var string 默认空，容器版传"native"
     */
    public $DisplayStrategy;

    /**
     * @var array 用户组
     */
    public $UserGroupList;

    /**
     * @param string $InstanceId 集群实例ID
     * @param array $UserNameList 集群用户名列表
     * @param string $TkeClusterId tke/eks集群id，容器集群传
     * @param string $DisplayStrategy 默认空，容器版传"native"
     * @param array $UserGroupList 用户组
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserNameList",$param) and $param["UserNameList"] !== null) {
            $this->UserNameList = $param["UserNameList"];
        }

        if (array_key_exists("TkeClusterId",$param) and $param["TkeClusterId"] !== null) {
            $this->TkeClusterId = $param["TkeClusterId"];
        }

        if (array_key_exists("DisplayStrategy",$param) and $param["DisplayStrategy"] !== null) {
            $this->DisplayStrategy = $param["DisplayStrategy"];
        }

        if (array_key_exists("UserGroupList",$param) and $param["UserGroupList"] !== null) {
            $this->UserGroupList = [];
            foreach ($param["UserGroupList"] as $key => $value){
                $obj = new UserAndGroup();
                $obj->deserialize($value);
                array_push($this->UserGroupList, $obj);
            }
        }
    }
}
