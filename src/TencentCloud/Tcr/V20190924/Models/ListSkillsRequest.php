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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSkills请求参数结构体
 *
 * @method string getRegistryId() 获取<p>TCR实例ID</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>TCR实例ID</p>
 * @method string getSearchKey() 获取<p>模糊查询</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>模糊查询</p>
 * @method string getSkillName() 获取<p>技能名称</p>
 * @method void setSkillName(string $SkillName) 设置<p>技能名称</p>
 * @method string getSkillType() 获取<p>技能类型</p><p>枚举值：</p><ul><li>MCP Server： MCP Server 类型</li></ul>
 * @method void setSkillType(string $SkillType) 设置<p>技能类型</p><p>枚举值：</p><ul><li>MCP Server： MCP Server 类型</li></ul>
 * @method string getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>active： 活跃</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>active： 活跃</li></ul>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>限制</p>
 * @method void setLimit(integer $Limit) 设置<p>限制</p>
 */
class ListSkillsRequest extends AbstractModel
{
    /**
     * @var string <p>TCR实例ID</p>
     */
    public $RegistryId;

    /**
     * @var string <p>模糊查询</p>
     */
    public $SearchKey;

    /**
     * @var string <p>技能名称</p>
     */
    public $SkillName;

    /**
     * @var string <p>技能类型</p><p>枚举值：</p><ul><li>MCP Server： MCP Server 类型</li></ul>
     */
    public $SkillType;

    /**
     * @var string <p>状态</p><p>枚举值：</p><ul><li>active： 活跃</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>限制</p>
     */
    public $Limit;

    /**
     * @param string $RegistryId <p>TCR实例ID</p>
     * @param string $SearchKey <p>模糊查询</p>
     * @param string $SkillName <p>技能名称</p>
     * @param string $SkillType <p>技能类型</p><p>枚举值：</p><ul><li>MCP Server： MCP Server 类型</li></ul>
     * @param string $Status <p>状态</p><p>枚举值：</p><ul><li>active： 活跃</li></ul>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>限制</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("SkillType",$param) and $param["SkillType"] !== null) {
            $this->SkillType = $param["SkillType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
