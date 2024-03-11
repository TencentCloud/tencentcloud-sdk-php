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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAppDetail返回参数结构体
 *
 * @method string getSdkAppId() 获取SDK 对应的AppId 
 * @method void setSdkAppId(string $SdkAppId) 设置SDK 对应的AppId 
 * @method AppConfig getAppConfig() 获取应用配置
 * @method void setAppConfig(AppConfig $AppConfig) 设置应用配置
 * @method array getSceneConfig() 获取场景配置
 * @method void setSceneConfig(array $SceneConfig) 设置场景配置
 * @method TransferItem getTransferConfig() 获取转存配置
 * @method void setTransferConfig(TransferItem $TransferConfig) 设置转存配置
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAppDetailResponse extends AbstractModel
{
    /**
     * @var string SDK 对应的AppId 
     */
    public $SdkAppId;

    /**
     * @var AppConfig 应用配置
     */
    public $AppConfig;

    /**
     * @var array 场景配置
     */
    public $SceneConfig;

    /**
     * @var TransferItem 转存配置
     */
    public $TransferConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SdkAppId SDK 对应的AppId 
     * @param AppConfig $AppConfig 应用配置
     * @param array $SceneConfig 场景配置
     * @param TransferItem $TransferConfig 转存配置
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AppConfig",$param) and $param["AppConfig"] !== null) {
            $this->AppConfig = new AppConfig();
            $this->AppConfig->deserialize($param["AppConfig"]);
        }

        if (array_key_exists("SceneConfig",$param) and $param["SceneConfig"] !== null) {
            $this->SceneConfig = [];
            foreach ($param["SceneConfig"] as $key => $value){
                $obj = new SceneItem();
                $obj->deserialize($value);
                array_push($this->SceneConfig, $obj);
            }
        }

        if (array_key_exists("TransferConfig",$param) and $param["TransferConfig"] !== null) {
            $this->TransferConfig = new TransferItem();
            $this->TransferConfig->deserialize($param["TransferConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
