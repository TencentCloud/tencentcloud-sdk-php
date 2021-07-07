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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI模型资源使用信息
 *
 * @method integer getCreateTime() 获取开通时间
 * @method void setCreateTime(integer $CreateTime) 设置开通时间
 * @method integer getTotal() 获取资源总量
 * @method void setTotal(integer $Total) 设置资源总量
 * @method integer getUsed() 获取已使用资源数量
 * @method void setUsed(integer $Used) 设置已使用资源数量
 */
class AIModelUsageInfo extends AbstractModel
{
    /**
     * @var integer 开通时间
     */
    public $CreateTime;

    /**
     * @var integer 资源总量
     */
    public $Total;

    /**
     * @var integer 已使用资源数量
     */
    public $Used;

    /**
     * @param integer $CreateTime 开通时间
     * @param integer $Total 资源总量
     * @param integer $Used 已使用资源数量
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
