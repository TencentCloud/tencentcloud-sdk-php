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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceRenew请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getTimeSpan() 获取购买时长,与TimeUnit组合才能生效
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长,与TimeUnit组合才能生效
 * @method string getTimeUnit() 获取购买时长单位, 与TimeSpan组合生效，可选:日:d,月:m
 * @method void setTimeUnit(string $TimeUnit) 设置购买时长单位, 与TimeSpan组合生效，可选:日:d,月:m
 */
class InquirePriceRenewRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 购买时长,与TimeUnit组合才能生效
     */
    public $TimeSpan;

    /**
     * @var string 购买时长单位, 与TimeSpan组合生效，可选:日:d,月:m
     */
    public $TimeUnit;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $TimeSpan 购买时长,与TimeUnit组合才能生效
     * @param string $TimeUnit 购买时长单位, 与TimeSpan组合生效，可选:日:d,月:m
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }
    }
}
