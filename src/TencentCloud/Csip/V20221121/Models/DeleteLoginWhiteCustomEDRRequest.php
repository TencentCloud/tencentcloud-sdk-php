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
 * DeleteLoginWhiteCustomEDR请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getIds() 获取<p>显式勾选的规则ID列表，最多 1000 个；与 SelectAll 二选一</p>
 * @method void setIds(array $Ids) 设置<p>显式勾选的规则ID列表，最多 1000 个；与 SelectAll 二选一</p>
 * @method boolean getSelectAll() 获取<p>是否跨页全选：true-删除符合 Filters 的全部规则（此时 Filters 必填） false-仅删除 Ids</p>
 * @method void setSelectAll(boolean $SelectAll) 设置<p>是否跨页全选：true-删除符合 Filters 的全部规则（此时 Filters 必填） false-仅删除 Ids</p>
 * @method array getTargetAppIDs() 获取<p>多账号目标账号 AppId 列表，最多 1000 个；为空表示仅当前账号；传入但全部无权限时返回 InvalidParameter</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) 设置<p>多账号目标账号 AppId 列表，最多 1000 个；为空表示仅当前账号；传入但全部无权限时返回 InvalidParameter</p>
 * @method array getExcludeIds() 获取<p>排除的规则ID列表，最多1000个</p>
 * @method void setExcludeIds(array $ExcludeIds) 设置<p>排除的规则ID列表，最多1000个</p>
 * @method array getFilters() 获取<p>全选条件下的筛选条件</p>
 * @method void setFilters(array $Filters) 设置<p>全选条件下的筛选条件</p>
 */
class DeleteLoginWhiteCustomEDRRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>显式勾选的规则ID列表，最多 1000 个；与 SelectAll 二选一</p>
     */
    public $Ids;

    /**
     * @var boolean <p>是否跨页全选：true-删除符合 Filters 的全部规则（此时 Filters 必填） false-仅删除 Ids</p>
     */
    public $SelectAll;

    /**
     * @var array <p>多账号目标账号 AppId 列表，最多 1000 个；为空表示仅当前账号；传入但全部无权限时返回 InvalidParameter</p>
     */
    public $TargetAppIDs;

    /**
     * @var array <p>排除的规则ID列表，最多1000个</p>
     */
    public $ExcludeIds;

    /**
     * @var array <p>全选条件下的筛选条件</p>
     */
    public $Filters;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Ids <p>显式勾选的规则ID列表，最多 1000 个；与 SelectAll 二选一</p>
     * @param boolean $SelectAll <p>是否跨页全选：true-删除符合 Filters 的全部规则（此时 Filters 必填） false-仅删除 Ids</p>
     * @param array $TargetAppIDs <p>多账号目标账号 AppId 列表，最多 1000 个；为空表示仅当前账号；传入但全部无权限时返回 InvalidParameter</p>
     * @param array $ExcludeIds <p>排除的规则ID列表，最多1000个</p>
     * @param array $Filters <p>全选条件下的筛选条件</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }

        if (array_key_exists("ExcludeIds",$param) and $param["ExcludeIds"] !== null) {
            $this->ExcludeIds = $param["ExcludeIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
