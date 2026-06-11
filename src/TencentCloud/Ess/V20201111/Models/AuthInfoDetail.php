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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业扩展服务授权列表详情
 *
 * @method string getType() 获取<p>扩展服务类型，和入参一致</p>
 * @method void setType(string $Type) 设置<p>扩展服务类型，和入参一致</p>
 * @method string getName() 获取<p>扩展服务名称</p>
 * @method void setName(string $Name) 设置<p>扩展服务名称</p>
 * @method array getHasAuthUserList() 获取<p>授权员工列表</p>
 * @method void setHasAuthUserList(array $HasAuthUserList) 设置<p>授权员工列表</p>
 * @method array getHasAuthOrganizationList() 获取<p>授权企业列表（企业自动签时，该字段有值）</p>
 * @method void setHasAuthOrganizationList(array $HasAuthOrganizationList) 设置<p>授权企业列表（企业自动签时，该字段有值）</p>
 * @method integer getAuthUserTotal() 获取<p>授权员工列表总数</p>
 * @method void setAuthUserTotal(integer $AuthUserTotal) 设置<p>授权员工列表总数</p>
 * @method integer getAuthOrganizationTotal() 获取<p>授权企业列表总数</p>
 * @method void setAuthOrganizationTotal(integer $AuthOrganizationTotal) 设置<p>授权企业列表总数</p>
 */
class AuthInfoDetail extends AbstractModel
{
    /**
     * @var string <p>扩展服务类型，和入参一致</p>
     */
    public $Type;

    /**
     * @var string <p>扩展服务名称</p>
     */
    public $Name;

    /**
     * @var array <p>授权员工列表</p>
     */
    public $HasAuthUserList;

    /**
     * @var array <p>授权企业列表（企业自动签时，该字段有值）</p>
     */
    public $HasAuthOrganizationList;

    /**
     * @var integer <p>授权员工列表总数</p>
     */
    public $AuthUserTotal;

    /**
     * @var integer <p>授权企业列表总数</p>
     */
    public $AuthOrganizationTotal;

    /**
     * @param string $Type <p>扩展服务类型，和入参一致</p>
     * @param string $Name <p>扩展服务名称</p>
     * @param array $HasAuthUserList <p>授权员工列表</p>
     * @param array $HasAuthOrganizationList <p>授权企业列表（企业自动签时，该字段有值）</p>
     * @param integer $AuthUserTotal <p>授权员工列表总数</p>
     * @param integer $AuthOrganizationTotal <p>授权企业列表总数</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("HasAuthUserList",$param) and $param["HasAuthUserList"] !== null) {
            $this->HasAuthUserList = [];
            foreach ($param["HasAuthUserList"] as $key => $value){
                $obj = new HasAuthUser();
                $obj->deserialize($value);
                array_push($this->HasAuthUserList, $obj);
            }
        }

        if (array_key_exists("HasAuthOrganizationList",$param) and $param["HasAuthOrganizationList"] !== null) {
            $this->HasAuthOrganizationList = [];
            foreach ($param["HasAuthOrganizationList"] as $key => $value){
                $obj = new HasAuthOrganization();
                $obj->deserialize($value);
                array_push($this->HasAuthOrganizationList, $obj);
            }
        }

        if (array_key_exists("AuthUserTotal",$param) and $param["AuthUserTotal"] !== null) {
            $this->AuthUserTotal = $param["AuthUserTotal"];
        }

        if (array_key_exists("AuthOrganizationTotal",$param) and $param["AuthOrganizationTotal"] !== null) {
            $this->AuthOrganizationTotal = $param["AuthOrganizationTotal"];
        }
    }
}
