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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCRObtainStatus请求参数结构体
 *
 * @method integer getTortId() 获取xxx
 * @method void setTortId(integer $TortId) 设置xxx
 * @method integer getObtainType() 获取xxx
 * @method void setObtainType(integer $ObtainType) 设置xxx
 * @method integer getObtainDuration() 获取xxx
 * @method void setObtainDuration(integer $ObtainDuration) 设置xxx
 * @method string getObtainUrl() 获取xxx
 * @method void setObtainUrl(string $ObtainUrl) 设置xxx
 */
class ModifyCRObtainStatusRequest extends AbstractModel
{
    /**
     * @var integer xxx
     */
    public $TortId;

    /**
     * @var integer xxx
     */
    public $ObtainType;

    /**
     * @var integer xxx
     */
    public $ObtainDuration;

    /**
     * @var string xxx
     */
    public $ObtainUrl;

    /**
     * @param integer $TortId xxx
     * @param integer $ObtainType xxx
     * @param integer $ObtainDuration xxx
     * @param string $ObtainUrl xxx
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
        if (array_key_exists("TortId",$param) and $param["TortId"] !== null) {
            $this->TortId = $param["TortId"];
        }

        if (array_key_exists("ObtainType",$param) and $param["ObtainType"] !== null) {
            $this->ObtainType = $param["ObtainType"];
        }

        if (array_key_exists("ObtainDuration",$param) and $param["ObtainDuration"] !== null) {
            $this->ObtainDuration = $param["ObtainDuration"];
        }

        if (array_key_exists("ObtainUrl",$param) and $param["ObtainUrl"] !== null) {
            $this->ObtainUrl = $param["ObtainUrl"];
        }
    }
}
