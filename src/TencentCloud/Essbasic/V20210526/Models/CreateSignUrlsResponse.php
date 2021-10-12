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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSignUrls返回参数结构体
 *
 * @method array getSignUrlInfos() 获取签署参与者签署H5链接信息数组
 * @method void setSignUrlInfos(array $SignUrlInfos) 设置签署参与者签署H5链接信息数组
 * @method array getErrorMessages() 获取生成失败时的错误信息，成功返回”“，顺序和出参SignUrlInfos保持一致
 * @method void setErrorMessages(array $ErrorMessages) 设置生成失败时的错误信息，成功返回”“，顺序和出参SignUrlInfos保持一致
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSignUrlsResponse extends AbstractModel
{
    /**
     * @var array 签署参与者签署H5链接信息数组
     */
    public $SignUrlInfos;

    /**
     * @var array 生成失败时的错误信息，成功返回”“，顺序和出参SignUrlInfos保持一致
     */
    public $ErrorMessages;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SignUrlInfos 签署参与者签署H5链接信息数组
     * @param array $ErrorMessages 生成失败时的错误信息，成功返回”“，顺序和出参SignUrlInfos保持一致
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
        if (array_key_exists("SignUrlInfos",$param) and $param["SignUrlInfos"] !== null) {
            $this->SignUrlInfos = [];
            foreach ($param["SignUrlInfos"] as $key => $value){
                $obj = new SignUrlInfo();
                $obj->deserialize($value);
                array_push($this->SignUrlInfos, $obj);
            }
        }

        if (array_key_exists("ErrorMessages",$param) and $param["ErrorMessages"] !== null) {
            $this->ErrorMessages = $param["ErrorMessages"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
