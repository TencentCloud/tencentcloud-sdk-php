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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ClassifyContent返回参数结构体
 *
 * @method Category getFirstClassification() 获取一级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
 * @method void setFirstClassification(Category $FirstClassification) 设置一级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
 * @method Category getSecondClassification() 获取二级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
 * @method void setSecondClassification(Category $SecondClassification) 设置二级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
 * @method Category getThirdClassification() 获取三级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdClassification(Category $ThirdClassification) 设置三级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ClassifyContentResponse extends AbstractModel
{
    /**
     * @var Category 一级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
     */
    public $FirstClassification;

    /**
     * @var Category 二级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
     */
    public $SecondClassification;

    /**
     * @var Category 三级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdClassification;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param Category $FirstClassification 一级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
     * @param Category $SecondClassification 二级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
     * @param Category $ThirdClassification 三级分类。（请参见附录[三级分类体系表](https://cloud.tencent.com/document/product/271/94286)）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FirstClassification",$param) and $param["FirstClassification"] !== null) {
            $this->FirstClassification = new Category();
            $this->FirstClassification->deserialize($param["FirstClassification"]);
        }

        if (array_key_exists("SecondClassification",$param) and $param["SecondClassification"] !== null) {
            $this->SecondClassification = new Category();
            $this->SecondClassification->deserialize($param["SecondClassification"]);
        }

        if (array_key_exists("ThirdClassification",$param) and $param["ThirdClassification"] !== null) {
            $this->ThirdClassification = new Category();
            $this->ThirdClassification->deserialize($param["ThirdClassification"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
