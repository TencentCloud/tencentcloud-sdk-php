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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ComposeCouplet返回参数结构体
 *
 * @method string getTopScroll() 获取横批。
 * @method void setTopScroll(string $TopScroll) 设置横批。
 * @method array getContent() 获取上联与下联。
 * @method void setContent(array $Content) 设置上联与下联。
 * @method string getRandomCause() 获取当对联随机生成时，展示随机生成原因。
 * @method void setRandomCause(string $RandomCause) 设置当对联随机生成时，展示随机生成原因。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ComposeCoupletResponse extends AbstractModel
{
    /**
     * @var string 横批。
     */
    public $TopScroll;

    /**
     * @var array 上联与下联。
     */
    public $Content;

    /**
     * @var string 当对联随机生成时，展示随机生成原因。
     */
    public $RandomCause;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TopScroll 横批。
     * @param array $Content 上联与下联。
     * @param string $RandomCause 当对联随机生成时，展示随机生成原因。
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
        if (array_key_exists("TopScroll",$param) and $param["TopScroll"] !== null) {
            $this->TopScroll = $param["TopScroll"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("RandomCause",$param) and $param["RandomCause"] !== null) {
            $this->RandomCause = $param["RandomCause"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
