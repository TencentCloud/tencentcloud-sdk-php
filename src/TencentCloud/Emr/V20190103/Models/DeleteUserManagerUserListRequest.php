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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUserManagerUserList请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群实例ID</p>
 * @method array getUserNameList() 获取<p>集群用户名列表</p>
 * @method void setUserNameList(array $UserNameList) 设置<p>集群用户名列表</p>
 * @method string getTkeClusterId() 获取<p>tke/eks集群id，容器集群传</p>
 * @method void setTkeClusterId(string $TkeClusterId) 设置<p>tke/eks集群id，容器集群传</p>
 * @method string getDisplayStrategy() 获取<p>默认空，容器版传&quot;native&quot;</p>
 * @method void setDisplayStrategy(string $DisplayStrategy) 设置<p>默认空，容器版传&quot;native&quot;</p>
 * @method array getUserGroupList() 获取<p>用户组</p>
 * @method void setUserGroupList(array $UserGroupList) 设置<p>用户组</p>
 * @method boolean getDeleteHomeDir() 获取<p>是否删除家目录，只针对cvm集群</p>
 * @method void setDeleteHomeDir(boolean $DeleteHomeDir) 设置<p>是否删除家目录，只针对cvm集群</p>
 */
class DeleteUserManagerUserListRequest extends AbstractModel
{
    /**
     * @var string <p>集群实例ID</p>
     */
    public $InstanceId;

    /**
     * @var array <p>集群用户名列表</p>
     */
    public $UserNameList;

    /**
     * @var string <p>tke/eks集群id，容器集群传</p>
     */
    public $TkeClusterId;

    /**
     * @var string <p>默认空，容器版传&quot;native&quot;</p>
     */
    public $DisplayStrategy;

    /**
     * @var array <p>用户组</p>
     */
    public $UserGroupList;

    /**
     * @var boolean <p>是否删除家目录，只针对cvm集群</p>
     */
    public $DeleteHomeDir;

    /**
     * @param string $InstanceId <p>集群实例ID</p>
     * @param array $UserNameList <p>集群用户名列表</p>
     * @param string $TkeClusterId <p>tke/eks集群id，容器集群传</p>
     * @param string $DisplayStrategy <p>默认空，容器版传&quot;native&quot;</p>
     * @param array $UserGroupList <p>用户组</p>
     * @param boolean $DeleteHomeDir <p>是否删除家目录，只针对cvm集群</p>
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

        if (array_key_exists("DeleteHomeDir",$param) and $param["DeleteHomeDir"] !== null) {
            $this->DeleteHomeDir = $param["DeleteHomeDir"];
        }
    }
}
