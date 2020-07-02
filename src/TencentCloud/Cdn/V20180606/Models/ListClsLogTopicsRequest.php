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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListClsLogTopics请求参数结构体
 *
 * @method string getChannel() 获取接入渠道，默认值为cdn
 * @method void setChannel(string $Channel) 设置接入渠道，默认值为cdn
 */
class ListClsLogTopicsRequest extends AbstractModel
{
    /**
     * @var string 接入渠道，默认值为cdn
     */
    public $Channel;

    /**
     * @param string $Channel 接入渠道，默认值为cdn
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
        if (array_key_exists('Channel',$param) and $param['Channel'] !== null) {
            $this->Channel = $param['Channel'];
        }
    }
}
