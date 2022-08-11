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
 * DescribeConsumer返回参数结构体
 *
 * @method boolean getEffective() 获取投递任务是否生效
 * @method void setEffective(boolean $Effective) 设置投递任务是否生效
 * @method boolean getNeedContent() 获取是否投递日志的元数据信息
 * @method void setNeedContent(boolean $NeedContent) 设置是否投递日志的元数据信息
 * @method ConsumerContent getContent() 获取如果需要投递元数据信息，元数据信息的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(ConsumerContent $Content) 设置如果需要投递元数据信息，元数据信息的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ckafka getCkafka() 获取CKafka的描述
 * @method void setCkafka(Ckafka $Ckafka) 设置CKafka的描述
 * @method integer getCompression() 获取压缩方式[0:NONE；2:SNAPPY；3:LZ4]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompression(integer $Compression) 设置压缩方式[0:NONE；2:SNAPPY；3:LZ4]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConsumerResponse extends AbstractModel
{
    /**
     * @var boolean 投递任务是否生效
     */
    public $Effective;

    /**
     * @var boolean 是否投递日志的元数据信息
     */
    public $NeedContent;

    /**
     * @var ConsumerContent 如果需要投递元数据信息，元数据信息的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var Ckafka CKafka的描述
     */
    public $Ckafka;

    /**
     * @var integer 压缩方式[0:NONE；2:SNAPPY；3:LZ4]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compression;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Effective 投递任务是否生效
     * @param boolean $NeedContent 是否投递日志的元数据信息
     * @param ConsumerContent $Content 如果需要投递元数据信息，元数据信息的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ckafka $Ckafka CKafka的描述
     * @param integer $Compression 压缩方式[0:NONE；2:SNAPPY；3:LZ4]
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
        if (array_key_exists("Effective",$param) and $param["Effective"] !== null) {
            $this->Effective = $param["Effective"];
        }

        if (array_key_exists("NeedContent",$param) and $param["NeedContent"] !== null) {
            $this->NeedContent = $param["NeedContent"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ConsumerContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = new Ckafka();
            $this->Ckafka->deserialize($param["Ckafka"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
