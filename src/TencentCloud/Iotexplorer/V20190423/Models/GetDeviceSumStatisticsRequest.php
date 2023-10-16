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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDeviceSumStatistics请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method array getProductIds() 获取产品id列表，长度为0则拉取项目内全部产品
 * @method void setProductIds(array $ProductIds) 设置产品id列表，长度为0则拉取项目内全部产品
 */
class GetDeviceSumStatisticsRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var array 产品id列表，长度为0则拉取项目内全部产品
     */
    public $ProductIds;

    /**
     * @param string $ProjectId 项目id
     * @param array $ProductIds 产品id列表，长度为0则拉取项目内全部产品
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProductIds",$param) and $param["ProductIds"] !== null) {
            $this->ProductIds = $param["ProductIds"];
        }
    }
}
