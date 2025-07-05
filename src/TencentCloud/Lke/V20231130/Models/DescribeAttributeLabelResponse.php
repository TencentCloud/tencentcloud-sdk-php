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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAttributeLabel返回参数结构体
 *
 * @method string getAttributeBizId() 获取属性ID
 * @method void setAttributeBizId(string $AttributeBizId) 设置属性ID
 * @method string getAttrKey() 获取属性标识
 * @method void setAttrKey(string $AttrKey) 设置属性标识
 * @method string getAttrName() 获取属性名称
 * @method void setAttrName(string $AttrName) 设置属性名称
 * @method string getLabelNumber() 获取标签数量
 * @method void setLabelNumber(string $LabelNumber) 设置标签数量
 * @method array getLabels() 获取标签名称
 * @method void setLabels(array $Labels) 设置标签名称
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAttributeLabelResponse extends AbstractModel
{
    /**
     * @var string 属性ID
     */
    public $AttributeBizId;

    /**
     * @var string 属性标识
     */
    public $AttrKey;

    /**
     * @var string 属性名称
     */
    public $AttrName;

    /**
     * @var string 标签数量
     */
    public $LabelNumber;

    /**
     * @var array 标签名称
     */
    public $Labels;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AttributeBizId 属性ID
     * @param string $AttrKey 属性标识
     * @param string $AttrName 属性名称
     * @param string $LabelNumber 标签数量
     * @param array $Labels 标签名称
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("AttrKey",$param) and $param["AttrKey"] !== null) {
            $this->AttrKey = $param["AttrKey"];
        }

        if (array_key_exists("AttrName",$param) and $param["AttrName"] !== null) {
            $this->AttrName = $param["AttrName"];
        }

        if (array_key_exists("LabelNumber",$param) and $param["LabelNumber"] !== null) {
            $this->LabelNumber = $param["LabelNumber"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AttributeLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
