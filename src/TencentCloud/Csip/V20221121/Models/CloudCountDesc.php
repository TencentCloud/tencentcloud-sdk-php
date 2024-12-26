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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多云账户统计信息
 *
 * @method integer getCloudType() 获取0表示腾讯云
1表示AWS
 * @method void setCloudType(integer $CloudType) 设置0表示腾讯云
1表示AWS
 * @method integer getCloudCount() 获取账户数量
 * @method void setCloudCount(integer $CloudCount) 设置账户数量
 * @method string getCloudDesc() 获取该云账号类型描述
 * @method void setCloudDesc(string $CloudDesc) 设置该云账号类型描述
 */
class CloudCountDesc extends AbstractModel
{
    /**
     * @var integer 0表示腾讯云
1表示AWS
     */
    public $CloudType;

    /**
     * @var integer 账户数量
     */
    public $CloudCount;

    /**
     * @var string 该云账号类型描述
     */
    public $CloudDesc;

    /**
     * @param integer $CloudType 0表示腾讯云
1表示AWS
     * @param integer $CloudCount 账户数量
     * @param string $CloudDesc 该云账号类型描述
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
        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("CloudCount",$param) and $param["CloudCount"] !== null) {
            $this->CloudCount = $param["CloudCount"];
        }

        if (array_key_exists("CloudDesc",$param) and $param["CloudDesc"] !== null) {
            $this->CloudDesc = $param["CloudDesc"];
        }
    }
}
