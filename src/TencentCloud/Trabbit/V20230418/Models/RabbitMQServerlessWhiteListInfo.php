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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公网白名单信息
 *
 * @method string getPublicDataStreamWhiteList() 获取公网数据流白名单
 * @method void setPublicDataStreamWhiteList(string $PublicDataStreamWhiteList) 设置公网数据流白名单
 * @method string getPublicDataStreamWhiteListStatus() 获取公网数据流白名单状态
 * @method void setPublicDataStreamWhiteListStatus(string $PublicDataStreamWhiteListStatus) 设置公网数据流白名单状态
 */
class RabbitMQServerlessWhiteListInfo extends AbstractModel
{
    /**
     * @var string 公网数据流白名单
     */
    public $PublicDataStreamWhiteList;

    /**
     * @var string 公网数据流白名单状态
     */
    public $PublicDataStreamWhiteListStatus;

    /**
     * @param string $PublicDataStreamWhiteList 公网数据流白名单
     * @param string $PublicDataStreamWhiteListStatus 公网数据流白名单状态
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
        if (array_key_exists("PublicDataStreamWhiteList",$param) and $param["PublicDataStreamWhiteList"] !== null) {
            $this->PublicDataStreamWhiteList = $param["PublicDataStreamWhiteList"];
        }

        if (array_key_exists("PublicDataStreamWhiteListStatus",$param) and $param["PublicDataStreamWhiteListStatus"] !== null) {
            $this->PublicDataStreamWhiteListStatus = $param["PublicDataStreamWhiteListStatus"];
        }
    }
}
