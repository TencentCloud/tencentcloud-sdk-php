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
 * ModifyBaselineIgnorePolicy请求参数结构体
 *
 * @method integer getItemID() 获取<p>检测项 ID，标识对哪个检测项设置忽略策略。</p>
 * @method void setItemID(integer $ItemID) 设置<p>检测项 ID，标识对哪个检测项设置忽略策略。</p>
 * @method string getScopeType() 获取<p>忽略范围类型。</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>PICK： 指定资产</li></ul>
 * @method void setScopeType(string $ScopeType) 设置<p>忽略范围类型。</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>PICK： 指定资产</li></ul>
 * @method string getRemark() 获取<p>备注信息。</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息。</p>
 * @method integer getID() 获取<p>忽略策略记录 ID。新建时传 0，更新时传对应记录 ID。</p>
 * @method void setID(integer $ID) 设置<p>忽略策略记录 ID。新建时传 0，更新时传对应记录 ID。</p>
 * @method array getScopeIncludeList() 获取<p>自选资产 ID 列表，PICK 时生效，传入 instance-id 或集群 ID。</p>
 * @method void setScopeIncludeList(array $ScopeIncludeList) 设置<p>自选资产 ID 列表，PICK 时生效，传入 instance-id 或集群 ID。</p>
 * @method array getScopeExcludeList() 获取<p>剔除资产 ID 列表，ALL 时生效，传入 instance-id 或集群 ID。</p>
 * @method void setScopeExcludeList(array $ScopeExcludeList) 设置<p>剔除资产 ID 列表，ALL 时生效，传入 instance-id 或集群 ID。</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class ModifyBaselineIgnorePolicyRequest extends AbstractModel
{
    /**
     * @var integer <p>检测项 ID，标识对哪个检测项设置忽略策略。</p>
     */
    public $ItemID;

    /**
     * @var string <p>忽略范围类型。</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>PICK： 指定资产</li></ul>
     */
    public $ScopeType;

    /**
     * @var string <p>备注信息。</p>
     */
    public $Remark;

    /**
     * @var integer <p>忽略策略记录 ID。新建时传 0，更新时传对应记录 ID。</p>
     */
    public $ID;

    /**
     * @var array <p>自选资产 ID 列表，PICK 时生效，传入 instance-id 或集群 ID。</p>
     */
    public $ScopeIncludeList;

    /**
     * @var array <p>剔除资产 ID 列表，ALL 时生效，传入 instance-id 或集群 ID。</p>
     */
    public $ScopeExcludeList;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param integer $ItemID <p>检测项 ID，标识对哪个检测项设置忽略策略。</p>
     * @param string $ScopeType <p>忽略范围类型。</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>PICK： 指定资产</li></ul>
     * @param string $Remark <p>备注信息。</p>
     * @param integer $ID <p>忽略策略记录 ID。新建时传 0，更新时传对应记录 ID。</p>
     * @param array $ScopeIncludeList <p>自选资产 ID 列表，PICK 时生效，传入 instance-id 或集群 ID。</p>
     * @param array $ScopeExcludeList <p>剔除资产 ID 列表，ALL 时生效，传入 instance-id 或集群 ID。</p>
     * @param array $MemberId <p>集团账号的成员id</p>
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
        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ScopeIncludeList",$param) and $param["ScopeIncludeList"] !== null) {
            $this->ScopeIncludeList = $param["ScopeIncludeList"];
        }

        if (array_key_exists("ScopeExcludeList",$param) and $param["ScopeExcludeList"] !== null) {
            $this->ScopeExcludeList = $param["ScopeExcludeList"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
