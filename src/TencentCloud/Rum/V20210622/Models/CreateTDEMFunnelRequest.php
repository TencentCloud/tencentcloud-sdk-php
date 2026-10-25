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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTDEMFunnel请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getFunnelName() 获取<p>漏斗名</p>
 * @method void setFunnelName(string $FunnelName) 设置<p>漏斗名</p>
 * @method array getSteps() 获取<p>漏斗步骤</p>
 * @method void setSteps(array $Steps) 设置<p>漏斗步骤</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getStatus() 获取<p>漏斗状态</p>
 * @method void setStatus(string $Status) 设置<p>漏斗状态</p>
 * @method string getSource() 获取<p>漏斗来源</p>
 * @method void setSource(string $Source) 设置<p>漏斗来源</p>
 */
class CreateTDEMFunnelRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>漏斗名</p>
     */
    public $FunnelName;

    /**
     * @var array <p>漏斗步骤</p>
     */
    public $Steps;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>漏斗状态</p>
     */
    public $Status;

    /**
     * @var string <p>漏斗来源</p>
     */
    public $Source;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $FunnelName <p>漏斗名</p>
     * @param array $Steps <p>漏斗步骤</p>
     * @param string $Description <p>描述</p>
     * @param string $Status <p>漏斗状态</p>
     * @param string $Source <p>漏斗来源</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FunnelName",$param) and $param["FunnelName"] !== null) {
            $this->FunnelName = $param["FunnelName"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new FunnelStepInput();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
