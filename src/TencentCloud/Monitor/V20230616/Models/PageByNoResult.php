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
 * 分页结果参数
 *
 * @method integer getTotalCount() 获取总共有多少数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总共有多少数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPage() 获取总共有多少个分页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPage(integer $TotalPage) 设置总共有多少个分页
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentPageNo() 获取当前的分页号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentPageNo(integer $CurrentPageNo) 设置当前的分页号
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsEnd() 获取【已弃用】是否遍历到末尾
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEnd(boolean $IsEnd) 设置【已弃用】是否遍历到末尾
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnd() 获取是否遍历到末尾
 * @method void setEnd(boolean $End) 设置是否遍历到末尾
 */
class PageByNoResult extends AbstractModel
{
    /**
     * @var integer 总共有多少数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 总共有多少个分页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPage;

    /**
     * @var integer 当前的分页号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentPageNo;

    /**
     * @var boolean 【已弃用】是否遍历到末尾
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $IsEnd;

    /**
     * @var boolean 是否遍历到末尾
     */
    public $End;

    /**
     * @param integer $TotalCount 总共有多少数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPage 总共有多少个分页
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentPageNo 当前的分页号
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsEnd 【已弃用】是否遍历到末尾
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $End 是否遍历到末尾
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("CurrentPageNo",$param) and $param["CurrentPageNo"] !== null) {
            $this->CurrentPageNo = $param["CurrentPageNo"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
