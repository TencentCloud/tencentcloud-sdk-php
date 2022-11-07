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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamTaskLogList返回参数结构体
 *
 * @method boolean getListOver() 获取是否是全量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListOver(boolean $ListOver) 设置是否是全量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogContentList() 获取日志集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogContentList(array $LogContentList) 设置日志集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStreamTaskLogListResponse extends AbstractModel
{
    /**
     * @var boolean 是否是全量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListOver;

    /**
     * @var array 日志集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogContentList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $ListOver 是否是全量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LogContentList 日志集合
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
        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("LogContentList",$param) and $param["LogContentList"] !== null) {
            $this->LogContentList = [];
            foreach ($param["LogContentList"] as $key => $value){
                $obj = new LogContentInfo();
                $obj->deserialize($value);
                array_push($this->LogContentList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
