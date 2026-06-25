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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步的ioa用户组织信息
 *
 * @method integer getOrgId() 获取<p>ioa用户组织id</p>
 * @method void setOrgId(integer $OrgId) 设置<p>ioa用户组织id</p>
 * @method string getOrgName() 获取<p>ioa用户组织名称</p>
 * @method void setOrgName(string $OrgName) 设置<p>ioa用户组织名称</p>
 * @method string getOrgIdPath() 获取<p>ioa用户组织id路径</p>
 * @method void setOrgIdPath(string $OrgIdPath) 设置<p>ioa用户组织id路径</p>
 * @method string getOrgNamePath() 获取<p>ioa用户组织名称路径</p>
 * @method void setOrgNamePath(string $OrgNamePath) 设置<p>ioa用户组织名称路径</p>
 * @method integer getUserTotal() 获取<p>ioa用户组织id下的用户数</p>
 * @method void setUserTotal(integer $UserTotal) 设置<p>ioa用户组织id下的用户数</p>
 * @method array getBindGroupIds() 获取<p>组织绑定的用户组 id 列表</p>
 * @method void setBindGroupIds(array $BindGroupIds) 设置<p>组织绑定的用户组 id 列表</p>
 */
class UserOrg extends AbstractModel
{
    /**
     * @var integer <p>ioa用户组织id</p>
     */
    public $OrgId;

    /**
     * @var string <p>ioa用户组织名称</p>
     */
    public $OrgName;

    /**
     * @var string <p>ioa用户组织id路径</p>
     */
    public $OrgIdPath;

    /**
     * @var string <p>ioa用户组织名称路径</p>
     */
    public $OrgNamePath;

    /**
     * @var integer <p>ioa用户组织id下的用户数</p>
     */
    public $UserTotal;

    /**
     * @var array <p>组织绑定的用户组 id 列表</p>
     */
    public $BindGroupIds;

    /**
     * @param integer $OrgId <p>ioa用户组织id</p>
     * @param string $OrgName <p>ioa用户组织名称</p>
     * @param string $OrgIdPath <p>ioa用户组织id路径</p>
     * @param string $OrgNamePath <p>ioa用户组织名称路径</p>
     * @param integer $UserTotal <p>ioa用户组织id下的用户数</p>
     * @param array $BindGroupIds <p>组织绑定的用户组 id 列表</p>
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
        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("OrgName",$param) and $param["OrgName"] !== null) {
            $this->OrgName = $param["OrgName"];
        }

        if (array_key_exists("OrgIdPath",$param) and $param["OrgIdPath"] !== null) {
            $this->OrgIdPath = $param["OrgIdPath"];
        }

        if (array_key_exists("OrgNamePath",$param) and $param["OrgNamePath"] !== null) {
            $this->OrgNamePath = $param["OrgNamePath"];
        }

        if (array_key_exists("UserTotal",$param) and $param["UserTotal"] !== null) {
            $this->UserTotal = $param["UserTotal"];
        }

        if (array_key_exists("BindGroupIds",$param) and $param["BindGroupIds"] !== null) {
            $this->BindGroupIds = $param["BindGroupIds"];
        }
    }
}
