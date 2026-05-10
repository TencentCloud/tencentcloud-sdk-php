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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindBusinessResourceConnectorGroup请求参数结构体
 *
 * @method integer getServiceId() 获取要绑定连接器的业务资源id，创建时候响应会返回，修改调用端自己获取传递
 * @method void setServiceId(integer $ServiceId) 设置要绑定连接器的业务资源id，创建时候响应会返回，修改调用端自己获取传递
 * @method string getConnectorGroupId() 获取业务资源要绑定的连接器id
 * @method void setConnectorGroupId(string $ConnectorGroupId) 设置业务资源要绑定的连接器id
 */
class BindBusinessResourceConnectorGroupRequest extends AbstractModel
{
    /**
     * @var integer 要绑定连接器的业务资源id，创建时候响应会返回，修改调用端自己获取传递
     */
    public $ServiceId;

    /**
     * @var string 业务资源要绑定的连接器id
     */
    public $ConnectorGroupId;

    /**
     * @param integer $ServiceId 要绑定连接器的业务资源id，创建时候响应会返回，修改调用端自己获取传递
     * @param string $ConnectorGroupId 业务资源要绑定的连接器id
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ConnectorGroupId",$param) and $param["ConnectorGroupId"] !== null) {
            $this->ConnectorGroupId = $param["ConnectorGroupId"];
        }
    }
}
