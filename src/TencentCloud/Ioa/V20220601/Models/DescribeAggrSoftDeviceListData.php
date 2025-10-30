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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聚合软件-已安装终端列表
 *
 * @method Paging getPage() 获取分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPage(Paging $Page) 设置分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAggrSoftDeviceList() 获取详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAggrSoftDeviceList(array $AggrSoftDeviceList) 设置详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAggrSoftDeviceListData extends AbstractModel
{
    /**
     * @var Paging 分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Page;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AggrSoftDeviceList;

    /**
     * @param Paging $Page 分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AggrSoftDeviceList 详情
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = new Paging();
            $this->Page->deserialize($param["Page"]);
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AggrSoftDeviceList",$param) and $param["AggrSoftDeviceList"] !== null) {
            $this->AggrSoftDeviceList = [];
            foreach ($param["AggrSoftDeviceList"] as $key => $value){
                $obj = new AggrSoftDeviceRow();
                $obj->deserialize($value);
                array_push($this->AggrSoftDeviceList, $obj);
            }
        }
    }
}
