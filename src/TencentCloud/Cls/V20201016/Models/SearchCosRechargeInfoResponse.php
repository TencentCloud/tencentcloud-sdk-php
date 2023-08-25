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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchCosRechargeInfo返回参数结构体
 *
 * @method array getData() 获取匹配到的存储桶下的某个文件的前几行数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置匹配到的存储桶下的某个文件的前几行数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSum() 获取匹配到的存储桶下的文件个数
 * @method void setSum(integer $Sum) 设置匹配到的存储桶下的文件个数
 * @method string getPath() 获取当前预览文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置当前预览文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsg() 获取预览获取数据失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置预览获取数据失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SearchCosRechargeInfoResponse extends AbstractModel
{
    /**
     * @var array 匹配到的存储桶下的某个文件的前几行数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer 匹配到的存储桶下的文件个数
     */
    public $Sum;

    /**
     * @var string 当前预览文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string 预览获取数据失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 匹配到的存储桶下的某个文件的前几行数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Sum 匹配到的存储桶下的文件个数
     * @param string $Path 当前预览文件路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msg 预览获取数据失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
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
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Sum",$param) and $param["Sum"] !== null) {
            $this->Sum = $param["Sum"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
