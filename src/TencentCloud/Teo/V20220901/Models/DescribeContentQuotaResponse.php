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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeContentQuota返回参数结构体
 *
 * @method array getPurgeQuota() 获取刷新相关配额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPurgeQuota(array $PurgeQuota) 设置刷新相关配额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrefetchQuota() 获取预热相关配额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrefetchQuota(array $PrefetchQuota) 设置预热相关配额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeContentQuotaResponse extends AbstractModel
{
    /**
     * @var array 刷新相关配额。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PurgeQuota;

    /**
     * @var array 预热相关配额。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrefetchQuota;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PurgeQuota 刷新相关配额。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrefetchQuota 预热相关配额。
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
        if (array_key_exists("PurgeQuota",$param) and $param["PurgeQuota"] !== null) {
            $this->PurgeQuota = [];
            foreach ($param["PurgeQuota"] as $key => $value){
                $obj = new Quota();
                $obj->deserialize($value);
                array_push($this->PurgeQuota, $obj);
            }
        }

        if (array_key_exists("PrefetchQuota",$param) and $param["PrefetchQuota"] !== null) {
            $this->PrefetchQuota = [];
            foreach ($param["PrefetchQuota"] as $key => $value){
                $obj = new Quota();
                $obj->deserialize($value);
                array_push($this->PrefetchQuota, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
