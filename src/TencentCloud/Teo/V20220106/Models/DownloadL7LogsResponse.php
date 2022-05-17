<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadL7Logs返回参数结构体
 *
 * @method array getData() 获取七层离线日志data
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置七层离线日志data
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取页面大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置页面大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNo() 获取页号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNo(integer $PageNo) 设置页号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPages() 获取总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPages(integer $Pages) 设置总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalSize() 获取总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSize(integer $TotalSize) 设置总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DownloadL7LogsResponse extends AbstractModel
{
    /**
     * @var array 七层离线日志data
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer 页面大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer 页号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNo;

    /**
     * @var integer 总页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pages;

    /**
     * @var integer 总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSize;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 七层离线日志data
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 页面大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNo 页号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Pages 总页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalSize 总条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new L7OfflineLog();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
