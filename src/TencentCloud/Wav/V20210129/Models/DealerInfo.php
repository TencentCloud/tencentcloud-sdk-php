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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 经销商信息
 *
 * @method integer getDealerId() 获取企微SaaS平台经销商id
 * @method void setDealerId(integer $DealerId) 设置企微SaaS平台经销商id
 * @method string getDealerName() 获取经销商名称
 * @method void setDealerName(string $DealerName) 设置经销商名称
 */
class DealerInfo extends AbstractModel
{
    /**
     * @var integer 企微SaaS平台经销商id
     */
    public $DealerId;

    /**
     * @var string 经销商名称
     */
    public $DealerName;

    /**
     * @param integer $DealerId 企微SaaS平台经销商id
     * @param string $DealerName 经销商名称
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
        if (array_key_exists("DealerId",$param) and $param["DealerId"] !== null) {
            $this->DealerId = $param["DealerId"];
        }

        if (array_key_exists("DealerName",$param) and $param["DealerName"] !== null) {
            $this->DealerName = $param["DealerName"];
        }
    }
}
