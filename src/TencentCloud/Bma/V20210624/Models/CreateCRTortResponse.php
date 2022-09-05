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
 * CreateCRTort返回参数结构体
 *
 * @method integer getWorkId() 获取xx
 * @method void setWorkId(integer $WorkId) 设置xx
 * @method integer getTortId() 获取xx
 * @method void setTortId(integer $TortId) 设置xx
 * @method string getTortTitle() 获取xx
 * @method void setTortTitle(string $TortTitle) 设置xx
 * @method string getTortPlat() 获取xx
 * @method void setTortPlat(string $TortPlat) 设置xx
 * @method string getTortURL() 获取xx
 * @method void setTortURL(string $TortURL) 设置xx
 * @method string getTortDomain() 获取xx
 * @method void setTortDomain(string $TortDomain) 设置xx
 * @method string getTortBodyName() 获取xx
 * @method void setTortBodyName(string $TortBodyName) 设置xx
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCRTortResponse extends AbstractModel
{
    /**
     * @var integer xx
     */
    public $WorkId;

    /**
     * @var integer xx
     */
    public $TortId;

    /**
     * @var string xx
     */
    public $TortTitle;

    /**
     * @var string xx
     */
    public $TortPlat;

    /**
     * @var string xx
     */
    public $TortURL;

    /**
     * @var string xx
     */
    public $TortDomain;

    /**
     * @var string xx
     */
    public $TortBodyName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $WorkId xx
     * @param integer $TortId xx
     * @param string $TortTitle xx
     * @param string $TortPlat xx
     * @param string $TortURL xx
     * @param string $TortDomain xx
     * @param string $TortBodyName xx
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("TortId",$param) and $param["TortId"] !== null) {
            $this->TortId = $param["TortId"];
        }

        if (array_key_exists("TortTitle",$param) and $param["TortTitle"] !== null) {
            $this->TortTitle = $param["TortTitle"];
        }

        if (array_key_exists("TortPlat",$param) and $param["TortPlat"] !== null) {
            $this->TortPlat = $param["TortPlat"];
        }

        if (array_key_exists("TortURL",$param) and $param["TortURL"] !== null) {
            $this->TortURL = $param["TortURL"];
        }

        if (array_key_exists("TortDomain",$param) and $param["TortDomain"] !== null) {
            $this->TortDomain = $param["TortDomain"];
        }

        if (array_key_exists("TortBodyName",$param) and $param["TortBodyName"] !== null) {
            $this->TortBodyName = $param["TortBodyName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
