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
 * CreateCRTort请求参数结构体
 *
 * @method integer getWorkId() 获取xx
 * @method void setWorkId(integer $WorkId) 设置xx
 * @method string getTortURL() 获取xx
 * @method void setTortURL(string $TortURL) 设置xx
 * @method string getTortPlat() 获取xx
 * @method void setTortPlat(string $TortPlat) 设置xx
 * @method string getTortTitle() 获取xx
 * @method void setTortTitle(string $TortTitle) 设置xx
 */
class CreateCRTortRequest extends AbstractModel
{
    /**
     * @var integer xx
     */
    public $WorkId;

    /**
     * @var string xx
     */
    public $TortURL;

    /**
     * @var string xx
     */
    public $TortPlat;

    /**
     * @var string xx
     */
    public $TortTitle;

    /**
     * @param integer $WorkId xx
     * @param string $TortURL xx
     * @param string $TortPlat xx
     * @param string $TortTitle xx
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
        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("TortURL",$param) and $param["TortURL"] !== null) {
            $this->TortURL = $param["TortURL"];
        }

        if (array_key_exists("TortPlat",$param) and $param["TortPlat"] !== null) {
            $this->TortPlat = $param["TortPlat"];
        }

        if (array_key_exists("TortTitle",$param) and $param["TortTitle"] !== null) {
            $this->TortTitle = $param["TortTitle"];
        }
    }
}
