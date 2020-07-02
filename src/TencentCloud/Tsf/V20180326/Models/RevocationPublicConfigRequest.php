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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RevocationPublicConfig请求参数结构体
 *
 * @method string getConfigReleaseId() 获取配置项发布ID
 * @method void setConfigReleaseId(string $ConfigReleaseId) 设置配置项发布ID
 */
class RevocationPublicConfigRequest extends AbstractModel
{
    /**
     * @var string 配置项发布ID
     */
    public $ConfigReleaseId;

    /**
     * @param string $ConfigReleaseId 配置项发布ID
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
        if (array_key_exists('ConfigReleaseId',$param) and $param['ConfigReleaseId'] !== null) {
            $this->ConfigReleaseId = $param['ConfigReleaseId'];
        }
    }
}
