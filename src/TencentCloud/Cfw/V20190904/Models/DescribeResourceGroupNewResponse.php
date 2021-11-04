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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceGroupNew返回参数结构体
 *
 * @method string getData() 获取返回树形结构
 * @method void setData(string $Data) 设置返回树形结构
 * @method integer getUnResourceNum() 获取未分类实例数量
 * @method void setUnResourceNum(integer $UnResourceNum) 设置未分类实例数量
 * @method string getReturnMsg() 获取接口返回消息
 * @method void setReturnMsg(string $ReturnMsg) 设置接口返回消息
 * @method integer getReturnCode() 获取返回码；0为请求成功
 * @method void setReturnCode(integer $ReturnCode) 设置返回码；0为请求成功
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceGroupNewResponse extends AbstractModel
{
    /**
     * @var string 返回树形结构
     */
    public $Data;

    /**
     * @var integer 未分类实例数量
     */
    public $UnResourceNum;

    /**
     * @var string 接口返回消息
     */
    public $ReturnMsg;

    /**
     * @var integer 返回码；0为请求成功
     */
    public $ReturnCode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Data 返回树形结构
     * @param integer $UnResourceNum 未分类实例数量
     * @param string $ReturnMsg 接口返回消息
     * @param integer $ReturnCode 返回码；0为请求成功
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("UnResourceNum",$param) and $param["UnResourceNum"] !== null) {
            $this->UnResourceNum = $param["UnResourceNum"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
