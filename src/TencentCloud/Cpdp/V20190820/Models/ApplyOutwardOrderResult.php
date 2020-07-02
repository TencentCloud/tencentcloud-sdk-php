<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 汇出指令申请结果
 *
 * @method ApplyOutwardOrderData getData() 获取汇出指令申请数据
 * @method void setData(ApplyOutwardOrderData $Data) 设置汇出指令申请数据
 * @method string getCode() 获取错误码
 * @method void setCode(string $Code) 设置错误码
 */
class ApplyOutwardOrderResult extends AbstractModel
{
    /**
     * @var ApplyOutwardOrderData 汇出指令申请数据
     */
    public $Data;

    /**
     * @var string 错误码
     */
    public $Code;

    /**
     * @param ApplyOutwardOrderData $Data 汇出指令申请数据
     * @param string $Code 错误码
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
        if (array_key_exists('Data',$param) and $param['Data'] !== null) {
            $this->Data = new ApplyOutwardOrderData();
            $this->Data->deserialize($param['Data']);
        }

        if (array_key_exists('Code',$param) and $param['Code'] !== null) {
            $this->Code = $param['Code'];
        }
    }
}
