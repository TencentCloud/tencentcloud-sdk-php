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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPASupportedMetas返回参数结构体
 *
 * @method array getMetas() 获取支持的元数据类型
 * @method void setMetas(array $Metas) 设置支持的元数据类型
 * @method integer getMaxDBInstanceLimit() 获取最大支持每批次同步数量
 * @method void setMaxDBInstanceLimit(integer $MaxDBInstanceLimit) 设置最大支持每批次同步数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPASupportedMetasResponse extends AbstractModel
{
    /**
     * @var array 支持的元数据类型
     */
    public $Metas;

    /**
     * @var integer 最大支持每批次同步数量
     */
    public $MaxDBInstanceLimit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Metas 支持的元数据类型
     * @param integer $MaxDBInstanceLimit 最大支持每批次同步数量
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
        if (array_key_exists("Metas",$param) and $param["Metas"] !== null) {
            $this->Metas = [];
            foreach ($param["Metas"] as $key => $value){
                $obj = new DSPAMetaType();
                $obj->deserialize($value);
                array_push($this->Metas, $obj);
            }
        }

        if (array_key_exists("MaxDBInstanceLimit",$param) and $param["MaxDBInstanceLimit"] !== null) {
            $this->MaxDBInstanceLimit = $param["MaxDBInstanceLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
