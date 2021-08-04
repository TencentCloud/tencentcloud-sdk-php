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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCvmQuota返回参数结构体
 *
 * @method array getPostPaidQuotaSet() 获取后付费配额列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostPaidQuotaSet(array $PostPaidQuotaSet) 设置后付费配额列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSpotPaidQuotaSet() 获取竞价实例配额列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpotPaidQuotaSet(array $SpotPaidQuotaSet) 设置竞价实例配额列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEksQuotaSet() 获取eks配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEksQuotaSet(array $EksQuotaSet) 设置eks配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCvmQuotaResponse extends AbstractModel
{
    /**
     * @var array 后付费配额列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostPaidQuotaSet;

    /**
     * @var array 竞价实例配额列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpotPaidQuotaSet;

    /**
     * @var array eks配额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EksQuotaSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PostPaidQuotaSet 后付费配额列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SpotPaidQuotaSet 竞价实例配额列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EksQuotaSet eks配额
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
        if (array_key_exists("PostPaidQuotaSet",$param) and $param["PostPaidQuotaSet"] !== null) {
            $this->PostPaidQuotaSet = [];
            foreach ($param["PostPaidQuotaSet"] as $key => $value){
                $obj = new QuotaEntity();
                $obj->deserialize($value);
                array_push($this->PostPaidQuotaSet, $obj);
            }
        }

        if (array_key_exists("SpotPaidQuotaSet",$param) and $param["SpotPaidQuotaSet"] !== null) {
            $this->SpotPaidQuotaSet = [];
            foreach ($param["SpotPaidQuotaSet"] as $key => $value){
                $obj = new QuotaEntity();
                $obj->deserialize($value);
                array_push($this->SpotPaidQuotaSet, $obj);
            }
        }

        if (array_key_exists("EksQuotaSet",$param) and $param["EksQuotaSet"] !== null) {
            $this->EksQuotaSet = [];
            foreach ($param["EksQuotaSet"] as $key => $value){
                $obj = new PodSaleSpec();
                $obj->deserialize($value);
                array_push($this->EksQuotaSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
