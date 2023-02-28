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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConnectionDescription描述
 *
 * @method string getResourceDescription() 获取资源qcs六段式，更多参考 [资源六段式](https://cloud.tencent.com/document/product/598/10606)
 * @method void setResourceDescription(string $ResourceDescription) 设置资源qcs六段式，更多参考 [资源六段式](https://cloud.tencent.com/document/product/598/10606)
 * @method APIGWParams getAPIGWParams() 获取apigw参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAPIGWParams(APIGWParams $APIGWParams) 设置apigw参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method CkafkaParams getCkafkaParams() 获取ckafka参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCkafkaParams(CkafkaParams $CkafkaParams) 设置ckafka参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method DTSParams getDTSParams() 获取data transfer service (DTS)参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDTSParams(DTSParams $DTSParams) 设置data transfer service (DTS)参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConnectionDescription extends AbstractModel
{
    /**
     * @var string 资源qcs六段式，更多参考 [资源六段式](https://cloud.tencent.com/document/product/598/10606)
     */
    public $ResourceDescription;

    /**
     * @var APIGWParams apigw参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $APIGWParams;

    /**
     * @var CkafkaParams ckafka参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CkafkaParams;

    /**
     * @var DTSParams data transfer service (DTS)参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DTSParams;

    /**
     * @param string $ResourceDescription 资源qcs六段式，更多参考 [资源六段式](https://cloud.tencent.com/document/product/598/10606)
     * @param APIGWParams $APIGWParams apigw参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param CkafkaParams $CkafkaParams ckafka参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param DTSParams $DTSParams data transfer service (DTS)参数
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
        if (array_key_exists("ResourceDescription",$param) and $param["ResourceDescription"] !== null) {
            $this->ResourceDescription = $param["ResourceDescription"];
        }

        if (array_key_exists("APIGWParams",$param) and $param["APIGWParams"] !== null) {
            $this->APIGWParams = new APIGWParams();
            $this->APIGWParams->deserialize($param["APIGWParams"]);
        }

        if (array_key_exists("CkafkaParams",$param) and $param["CkafkaParams"] !== null) {
            $this->CkafkaParams = new CkafkaParams();
            $this->CkafkaParams->deserialize($param["CkafkaParams"]);
        }

        if (array_key_exists("DTSParams",$param) and $param["DTSParams"] !== null) {
            $this->DTSParams = new DTSParams();
            $this->DTSParams->deserialize($param["DTSParams"]);
        }
    }
}
