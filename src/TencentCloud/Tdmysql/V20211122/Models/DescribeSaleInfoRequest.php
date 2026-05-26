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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSaleInfo请求参数结构体
 *
 * @method string getSrcRegion() 获取<p>灾备主实例地域</p>
 * @method void setSrcRegion(string $SrcRegion) 设置<p>灾备主实例地域</p>
 * @method string getInstanceId() 获取<p>实例id</p><p>传入此参数表示返回这个实例所在的地域可用区的售卖信息</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p><p>传入此参数表示返回这个实例所在的地域可用区的售卖信息</p>
 * @method string getInstanceType() 获取<p>指定支持某种类型实例的 sale 信息</p><p>枚举值：</p><ul><li>serverless： 返回支持 serverless 型实例的所有 region</li></ul><p>默认值：无</p><p>当前仅支持指定 serverless，传入其他信息或者不传则默认返回所有售卖地域信息</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>指定支持某种类型实例的 sale 信息</p><p>枚举值：</p><ul><li>serverless： 返回支持 serverless 型实例的所有 region</li></ul><p>默认值：无</p><p>当前仅支持指定 serverless，传入其他信息或者不传则默认返回所有售卖地域信息</p>
 */
class DescribeSaleInfoRequest extends AbstractModel
{
    /**
     * @var string <p>灾备主实例地域</p>
     */
    public $SrcRegion;

    /**
     * @var string <p>实例id</p><p>传入此参数表示返回这个实例所在的地域可用区的售卖信息</p>
     */
    public $InstanceId;

    /**
     * @var string <p>指定支持某种类型实例的 sale 信息</p><p>枚举值：</p><ul><li>serverless： 返回支持 serverless 型实例的所有 region</li></ul><p>默认值：无</p><p>当前仅支持指定 serverless，传入其他信息或者不传则默认返回所有售卖地域信息</p>
     */
    public $InstanceType;

    /**
     * @param string $SrcRegion <p>灾备主实例地域</p>
     * @param string $InstanceId <p>实例id</p><p>传入此参数表示返回这个实例所在的地域可用区的售卖信息</p>
     * @param string $InstanceType <p>指定支持某种类型实例的 sale 信息</p><p>枚举值：</p><ul><li>serverless： 返回支持 serverless 型实例的所有 region</li></ul><p>默认值：无</p><p>当前仅支持指定 serverless，传入其他信息或者不传则默认返回所有售卖地域信息</p>
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
        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
