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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceKeyValConfigs返回参数结构体
 *
 * @method array getConfigItems() 获取参数列表
 * @method void setConfigItems(array $ConfigItems) 设置参数列表
 * @method array getUnConfigItems() 获取未配置的参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnConfigItems(array $UnConfigItems) 设置未配置的参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMapConfigItems() 获取配置的多层级参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMapConfigItems(array $MapConfigItems) 设置配置的多层级参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceKeyValConfigsResponse extends AbstractModel
{
    /**
     * @var array 参数列表
     */
    public $ConfigItems;

    /**
     * @var array 未配置的参数列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnConfigItems;

    /**
     * @var array 配置的多层级参数列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MapConfigItems;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ConfigItems 参数列表
     * @param array $UnConfigItems 未配置的参数列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MapConfigItems 配置的多层级参数列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMsg 错误信息
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
        if (array_key_exists("ConfigItems",$param) and $param["ConfigItems"] !== null) {
            $this->ConfigItems = [];
            foreach ($param["ConfigItems"] as $key => $value){
                $obj = new InstanceConfigInfo();
                $obj->deserialize($value);
                array_push($this->ConfigItems, $obj);
            }
        }

        if (array_key_exists("UnConfigItems",$param) and $param["UnConfigItems"] !== null) {
            $this->UnConfigItems = [];
            foreach ($param["UnConfigItems"] as $key => $value){
                $obj = new InstanceConfigInfo();
                $obj->deserialize($value);
                array_push($this->UnConfigItems, $obj);
            }
        }

        if (array_key_exists("MapConfigItems",$param) and $param["MapConfigItems"] !== null) {
            $this->MapConfigItems = [];
            foreach ($param["MapConfigItems"] as $key => $value){
                $obj = new MapConfigItem();
                $obj->deserialize($value);
                array_push($this->MapConfigItems, $obj);
            }
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
