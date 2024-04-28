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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeGeneralTextImageWarn返回参数结构体
 *
 * @method GeneralWarnInfo getCopy() 获取复印告警信息
 * @method void setCopy(GeneralWarnInfo $Copy) 设置复印告警信息
 * @method GeneralWarnInfo getReprint() 获取翻拍告警信息
 * @method void setReprint(GeneralWarnInfo $Reprint) 设置翻拍告警信息
 * @method GeneralWarnInfo getBlur() 获取模糊告警信息
 * @method void setBlur(GeneralWarnInfo $Blur) 设置模糊告警信息
 * @method GeneralWarnInfo getReflection() 获取反光告警信息
 * @method void setReflection(GeneralWarnInfo $Reflection) 设置反光告警信息
 * @method GeneralWarnInfo getBorderIncomplete() 获取边框不完整告警信息
 * @method void setBorderIncomplete(GeneralWarnInfo $BorderIncomplete) 设置边框不完整告警信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeGeneralTextImageWarnResponse extends AbstractModel
{
    /**
     * @var GeneralWarnInfo 复印告警信息
     */
    public $Copy;

    /**
     * @var GeneralWarnInfo 翻拍告警信息
     */
    public $Reprint;

    /**
     * @var GeneralWarnInfo 模糊告警信息
     */
    public $Blur;

    /**
     * @var GeneralWarnInfo 反光告警信息
     */
    public $Reflection;

    /**
     * @var GeneralWarnInfo 边框不完整告警信息
     */
    public $BorderIncomplete;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param GeneralWarnInfo $Copy 复印告警信息
     * @param GeneralWarnInfo $Reprint 翻拍告警信息
     * @param GeneralWarnInfo $Blur 模糊告警信息
     * @param GeneralWarnInfo $Reflection 反光告警信息
     * @param GeneralWarnInfo $BorderIncomplete 边框不完整告警信息
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
        if (array_key_exists("Copy",$param) and $param["Copy"] !== null) {
            $this->Copy = new GeneralWarnInfo();
            $this->Copy->deserialize($param["Copy"]);
        }

        if (array_key_exists("Reprint",$param) and $param["Reprint"] !== null) {
            $this->Reprint = new GeneralWarnInfo();
            $this->Reprint->deserialize($param["Reprint"]);
        }

        if (array_key_exists("Blur",$param) and $param["Blur"] !== null) {
            $this->Blur = new GeneralWarnInfo();
            $this->Blur->deserialize($param["Blur"]);
        }

        if (array_key_exists("Reflection",$param) and $param["Reflection"] !== null) {
            $this->Reflection = new GeneralWarnInfo();
            $this->Reflection->deserialize($param["Reflection"]);
        }

        if (array_key_exists("BorderIncomplete",$param) and $param["BorderIncomplete"] !== null) {
            $this->BorderIncomplete = new GeneralWarnInfo();
            $this->BorderIncomplete->deserialize($param["BorderIncomplete"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
