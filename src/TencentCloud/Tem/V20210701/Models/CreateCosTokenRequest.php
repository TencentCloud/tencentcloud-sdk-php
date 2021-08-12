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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCosToken请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getPkgName() 获取包名
 * @method void setPkgName(string $PkgName) 设置包名
 * @method integer getOptType() 获取optType 1上传  2查询
 * @method void setOptType(integer $OptType) 设置optType 1上传  2查询
 * @method integer getSourceChannel() 获取来源 channel
 * @method void setSourceChannel(integer $SourceChannel) 设置来源 channel
 * @method string getTimeVersion() 获取充当deployVersion入参
 * @method void setTimeVersion(string $TimeVersion) 设置充当deployVersion入参
 */
class CreateCosTokenRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 包名
     */
    public $PkgName;

    /**
     * @var integer optType 1上传  2查询
     */
    public $OptType;

    /**
     * @var integer 来源 channel
     */
    public $SourceChannel;

    /**
     * @var string 充当deployVersion入参
     */
    public $TimeVersion;

    /**
     * @param string $ApplicationId 应用ID
     * @param string $PkgName 包名
     * @param integer $OptType optType 1上传  2查询
     * @param integer $SourceChannel 来源 channel
     * @param string $TimeVersion 充当deployVersion入参
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("OptType",$param) and $param["OptType"] !== null) {
            $this->OptType = $param["OptType"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("TimeVersion",$param) and $param["TimeVersion"] !== null) {
            $this->TimeVersion = $param["TimeVersion"];
        }
    }
}
