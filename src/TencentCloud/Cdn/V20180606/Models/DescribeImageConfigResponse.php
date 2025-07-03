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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageConfig返回参数结构体
 *
 * @method WebpAdapter getWebpAdapter() 获取WebpAdapter配置
 * @method void setWebpAdapter(WebpAdapter $WebpAdapter) 设置WebpAdapter配置
 * @method TpgAdapter getTpgAdapter() 获取TpgAdapter配置
 * @method void setTpgAdapter(TpgAdapter $TpgAdapter) 设置TpgAdapter配置
 * @method GuetzliAdapter getGuetzliAdapter() 获取GuetzliAdapter配置
 * @method void setGuetzliAdapter(GuetzliAdapter $GuetzliAdapter) 设置GuetzliAdapter配置
 * @method AvifAdapter getAvifAdapter() 获取AvifAdapter配置项
 * @method void setAvifAdapter(AvifAdapter $AvifAdapter) 设置AvifAdapter配置项
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageConfigResponse extends AbstractModel
{
    /**
     * @var WebpAdapter WebpAdapter配置
     */
    public $WebpAdapter;

    /**
     * @var TpgAdapter TpgAdapter配置
     */
    public $TpgAdapter;

    /**
     * @var GuetzliAdapter GuetzliAdapter配置
     */
    public $GuetzliAdapter;

    /**
     * @var AvifAdapter AvifAdapter配置项
     */
    public $AvifAdapter;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param WebpAdapter $WebpAdapter WebpAdapter配置
     * @param TpgAdapter $TpgAdapter TpgAdapter配置
     * @param GuetzliAdapter $GuetzliAdapter GuetzliAdapter配置
     * @param AvifAdapter $AvifAdapter AvifAdapter配置项
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
        if (array_key_exists("WebpAdapter",$param) and $param["WebpAdapter"] !== null) {
            $this->WebpAdapter = new WebpAdapter();
            $this->WebpAdapter->deserialize($param["WebpAdapter"]);
        }

        if (array_key_exists("TpgAdapter",$param) and $param["TpgAdapter"] !== null) {
            $this->TpgAdapter = new TpgAdapter();
            $this->TpgAdapter->deserialize($param["TpgAdapter"]);
        }

        if (array_key_exists("GuetzliAdapter",$param) and $param["GuetzliAdapter"] !== null) {
            $this->GuetzliAdapter = new GuetzliAdapter();
            $this->GuetzliAdapter->deserialize($param["GuetzliAdapter"]);
        }

        if (array_key_exists("AvifAdapter",$param) and $param["AvifAdapter"] !== null) {
            $this->AvifAdapter = new AvifAdapter();
            $this->AvifAdapter->deserialize($param["AvifAdapter"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
