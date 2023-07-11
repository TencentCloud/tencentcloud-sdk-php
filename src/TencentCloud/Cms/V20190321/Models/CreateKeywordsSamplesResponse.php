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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKeywordsSamples返回参数结构体
 *
 * @method array getSampleIDs() 获取添加成功的关键词ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleIDs(array $SampleIDs) 设置添加成功的关键词ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSuccessInfos() 获取成功入库关键词列表
 * @method void setSuccessInfos(array $SuccessInfos) 设置成功入库关键词列表
 * @method array getDupInfos() 获取重复关键词列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDupInfos(array $DupInfos) 设置重复关键词列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInvalidSamples() 获取无效关键词列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvalidSamples(array $InvalidSamples) 设置无效关键词列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateKeywordsSamplesResponse extends AbstractModel
{
    /**
     * @var array 添加成功的关键词ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleIDs;

    /**
     * @var array 成功入库关键词列表
     */
    public $SuccessInfos;

    /**
     * @var array 重复关键词列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DupInfos;

    /**
     * @var array 无效关键词列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvalidSamples;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SampleIDs 添加成功的关键词ID列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SuccessInfos 成功入库关键词列表
     * @param array $DupInfos 重复关键词列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InvalidSamples 无效关键词列表
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
        if (array_key_exists("SampleIDs",$param) and $param["SampleIDs"] !== null) {
            $this->SampleIDs = $param["SampleIDs"];
        }

        if (array_key_exists("SuccessInfos",$param) and $param["SuccessInfos"] !== null) {
            $this->SuccessInfos = [];
            foreach ($param["SuccessInfos"] as $key => $value){
                $obj = new UserKeywordInfo();
                $obj->deserialize($value);
                array_push($this->SuccessInfos, $obj);
            }
        }

        if (array_key_exists("DupInfos",$param) and $param["DupInfos"] !== null) {
            $this->DupInfos = [];
            foreach ($param["DupInfos"] as $key => $value){
                $obj = new UserKeywordInfo();
                $obj->deserialize($value);
                array_push($this->DupInfos, $obj);
            }
        }

        if (array_key_exists("InvalidSamples",$param) and $param["InvalidSamples"] !== null) {
            $this->InvalidSamples = [];
            foreach ($param["InvalidSamples"] as $key => $value){
                $obj = new InvalidSample();
                $obj->deserialize($value);
                array_push($this->InvalidSamples, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
