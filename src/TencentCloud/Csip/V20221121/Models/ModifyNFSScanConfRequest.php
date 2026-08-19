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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNFSScanConf请求参数结构体
 *
 * @method integer getEnable() 获取<p>是否开启NFS扫描 0 否 1 是 9未设置,和0一样是未开启</p>
 * @method void setEnable(integer $Enable) 设置<p>是否开启NFS扫描 0 否 1 是 9未设置,和0一样是未开启</p>
 * @method integer getScope() 获取<p>开启范围 0 自选主机 1 全部主机</p>
 * @method void setScope(integer $Scope) 设置<p>开启范围 0 自选主机 1 全部主机</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getId() 获取<p>记录ID，新增时为0</p>
 * @method void setId(integer $Id) 设置<p>记录ID，新增时为0</p>
 * @method array getIncludeQuuid() 获取<p>正选quuid配置列表</p>
 * @method void setIncludeQuuid(array $IncludeQuuid) 设置<p>正选quuid配置列表</p>
 * @method array getExcludeQuuid() 获取<p>反选quuid配置列表</p>
 * @method void setExcludeQuuid(array $ExcludeQuuid) 设置<p>反选quuid配置列表</p>
 */
class ModifyNFSScanConfRequest extends AbstractModel
{
    /**
     * @var integer <p>是否开启NFS扫描 0 否 1 是 9未设置,和0一样是未开启</p>
     */
    public $Enable;

    /**
     * @var integer <p>开启范围 0 自选主机 1 全部主机</p>
     */
    public $Scope;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>记录ID，新增时为0</p>
     */
    public $Id;

    /**
     * @var array <p>正选quuid配置列表</p>
     */
    public $IncludeQuuid;

    /**
     * @var array <p>反选quuid配置列表</p>
     */
    public $ExcludeQuuid;

    /**
     * @param integer $Enable <p>是否开启NFS扫描 0 否 1 是 9未设置,和0一样是未开启</p>
     * @param integer $Scope <p>开启范围 0 自选主机 1 全部主机</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $Id <p>记录ID，新增时为0</p>
     * @param array $IncludeQuuid <p>正选quuid配置列表</p>
     * @param array $ExcludeQuuid <p>反选quuid配置列表</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IncludeQuuid",$param) and $param["IncludeQuuid"] !== null) {
            $this->IncludeQuuid = $param["IncludeQuuid"];
        }

        if (array_key_exists("ExcludeQuuid",$param) and $param["ExcludeQuuid"] !== null) {
            $this->ExcludeQuuid = $param["ExcludeQuuid"];
        }
    }
}
