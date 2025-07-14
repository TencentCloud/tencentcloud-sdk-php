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
 * 分页请求参数
 *
 * @method integer getPerPage() 获取每个分页的数量是多少
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPerPage(integer $PerPage) 设置每个分页的数量是多少
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPageNo() 获取第几个分页，从1开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNo(string $PageNo) 设置第几个分页，从1开始
注意：此字段可能返回 null，表示取不到有效值。
 */
class PageByNoParams extends AbstractModel
{
    /**
     * @var integer 每个分页的数量是多少
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PerPage;

    /**
     * @var string 第几个分页，从1开始
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNo;

    /**
     * @param integer $PerPage 每个分页的数量是多少
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PageNo 第几个分页，从1开始
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
