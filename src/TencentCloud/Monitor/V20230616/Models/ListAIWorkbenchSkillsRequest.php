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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAIWorkbenchSkills请求参数结构体
 *
 * @method integer getPerPage() 获取<p>每页数量</p>
 * @method void setPerPage(integer $PerPage) 设置<p>每页数量</p>
 * @method integer getPageNo() 获取<p>页码</p>
 * @method void setPageNo(integer $PageNo) 设置<p>页码</p>
 * @method string getType() 获取<p>按类型筛选</p>
 * @method void setType(string $Type) 设置<p>按类型筛选</p>
 * @method string getKeyword() 获取<p>搜索关键词</p>
 * @method void setKeyword(string $Keyword) 设置<p>搜索关键词</p>
 * @method boolean getEnabled() 获取<p>是否启用筛选</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用筛选</p>
 * @method array getSkillIds() 获取<p>技能 ID 列表筛选</p>
 * @method void setSkillIds(array $SkillIds) 设置<p>技能 ID 列表筛选</p>
 */
class ListAIWorkbenchSkillsRequest extends AbstractModel
{
    /**
     * @var integer <p>每页数量</p>
     */
    public $PerPage;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNo;

    /**
     * @var string <p>按类型筛选</p>
     */
    public $Type;

    /**
     * @var string <p>搜索关键词</p>
     */
    public $Keyword;

    /**
     * @var boolean <p>是否启用筛选</p>
     */
    public $Enabled;

    /**
     * @var array <p>技能 ID 列表筛选</p>
     */
    public $SkillIds;

    /**
     * @param integer $PerPage <p>每页数量</p>
     * @param integer $PageNo <p>页码</p>
     * @param string $Type <p>按类型筛选</p>
     * @param string $Keyword <p>搜索关键词</p>
     * @param boolean $Enabled <p>是否启用筛选</p>
     * @param array $SkillIds <p>技能 ID 列表筛选</p>
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
        if (array_key_exists("PerPage",$param) and $param["PerPage"] !== null) {
            $this->PerPage = $param["PerPage"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("SkillIds",$param) and $param["SkillIds"] !== null) {
            $this->SkillIds = $param["SkillIds"];
        }
    }
}
