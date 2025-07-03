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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作类型返回的Data结构
 *
 * @method integer getFlowId() 获取流程Id
 * @method void setFlowId(integer $FlowId) 设置流程Id
 * @method RouteDTO getRouteDTO() 获取RouteIdDto
 * @method void setRouteDTO(RouteDTO $RouteDTO) 设置RouteIdDto
 */
class OperateResponseData extends AbstractModel
{
    /**
     * @var integer 流程Id
     */
    public $FlowId;

    /**
     * @var RouteDTO RouteIdDto
     */
    public $RouteDTO;

    /**
     * @param integer $FlowId 流程Id
     * @param RouteDTO $RouteDTO RouteIdDto
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("RouteDTO",$param) and $param["RouteDTO"] !== null) {
            $this->RouteDTO = new RouteDTO();
            $this->RouteDTO->deserialize($param["RouteDTO"]);
        }
    }
}
