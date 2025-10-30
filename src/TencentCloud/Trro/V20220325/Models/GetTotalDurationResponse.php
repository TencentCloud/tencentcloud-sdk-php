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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTotalDuration返回参数结构体
 *
 * @method integer getVoice() 获取语音:min
 * @method void setVoice(integer $Voice) 设置语音:min
 * @method integer getSD() 获取标清:min
 * @method void setSD(integer $SD) 设置标清:min
 * @method integer getHD() 获取高清:min
 * @method void setHD(integer $HD) 设置高清:min
 * @method integer getFHD() 获取超高清:min
 * @method void setFHD(integer $FHD) 设置超高清:min
 * @method integer getTwoK() 获取2k:min
 * @method void setTwoK(integer $TwoK) 设置2k:min
 * @method integer getFourK() 获取4k:min
 * @method void setFourK(integer $FourK) 设置4k:min
 * @method integer getOnline() 获取在线时长:min 
 * @method void setOnline(integer $Online) 设置在线时长:min 
 * @method integer getMultiSD() 获取多网标清:min
 * @method void setMultiSD(integer $MultiSD) 设置多网标清:min
 * @method integer getMultiHD() 获取多网高清:min
 * @method void setMultiHD(integer $MultiHD) 设置多网高清:min
 * @method integer getMultiFHD() 获取多网超高清:min
 * @method void setMultiFHD(integer $MultiFHD) 设置多网超高清:min
 * @method integer getMultiTwoK() 获取多网2k:min
 * @method void setMultiTwoK(integer $MultiTwoK) 设置多网2k:min
 * @method integer getMultiFourK() 获取多网4k:min
 * @method void setMultiFourK(integer $MultiFourK) 设置多网4k:min
 * @method integer getMultiOnline() 获取多网在线时长:min 
 * @method void setMultiOnline(integer $MultiOnline) 设置多网在线时长:min 
 * @method integer getDeductDuration() 获取总抵扣时长:min 
 * @method void setDeductDuration(integer $DeductDuration) 设置总抵扣时长:min 
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetTotalDurationResponse extends AbstractModel
{
    /**
     * @var integer 语音:min
     */
    public $Voice;

    /**
     * @var integer 标清:min
     */
    public $SD;

    /**
     * @var integer 高清:min
     */
    public $HD;

    /**
     * @var integer 超高清:min
     */
    public $FHD;

    /**
     * @var integer 2k:min
     */
    public $TwoK;

    /**
     * @var integer 4k:min
     */
    public $FourK;

    /**
     * @var integer 在线时长:min 
     */
    public $Online;

    /**
     * @var integer 多网标清:min
     */
    public $MultiSD;

    /**
     * @var integer 多网高清:min
     */
    public $MultiHD;

    /**
     * @var integer 多网超高清:min
     */
    public $MultiFHD;

    /**
     * @var integer 多网2k:min
     */
    public $MultiTwoK;

    /**
     * @var integer 多网4k:min
     */
    public $MultiFourK;

    /**
     * @var integer 多网在线时长:min 
     */
    public $MultiOnline;

    /**
     * @var integer 总抵扣时长:min 
     */
    public $DeductDuration;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Voice 语音:min
     * @param integer $SD 标清:min
     * @param integer $HD 高清:min
     * @param integer $FHD 超高清:min
     * @param integer $TwoK 2k:min
     * @param integer $FourK 4k:min
     * @param integer $Online 在线时长:min 
     * @param integer $MultiSD 多网标清:min
     * @param integer $MultiHD 多网高清:min
     * @param integer $MultiFHD 多网超高清:min
     * @param integer $MultiTwoK 多网2k:min
     * @param integer $MultiFourK 多网4k:min
     * @param integer $MultiOnline 多网在线时长:min 
     * @param integer $DeductDuration 总抵扣时长:min 
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
        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = $param["Voice"];
        }

        if (array_key_exists("SD",$param) and $param["SD"] !== null) {
            $this->SD = $param["SD"];
        }

        if (array_key_exists("HD",$param) and $param["HD"] !== null) {
            $this->HD = $param["HD"];
        }

        if (array_key_exists("FHD",$param) and $param["FHD"] !== null) {
            $this->FHD = $param["FHD"];
        }

        if (array_key_exists("TwoK",$param) and $param["TwoK"] !== null) {
            $this->TwoK = $param["TwoK"];
        }

        if (array_key_exists("FourK",$param) and $param["FourK"] !== null) {
            $this->FourK = $param["FourK"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("MultiSD",$param) and $param["MultiSD"] !== null) {
            $this->MultiSD = $param["MultiSD"];
        }

        if (array_key_exists("MultiHD",$param) and $param["MultiHD"] !== null) {
            $this->MultiHD = $param["MultiHD"];
        }

        if (array_key_exists("MultiFHD",$param) and $param["MultiFHD"] !== null) {
            $this->MultiFHD = $param["MultiFHD"];
        }

        if (array_key_exists("MultiTwoK",$param) and $param["MultiTwoK"] !== null) {
            $this->MultiTwoK = $param["MultiTwoK"];
        }

        if (array_key_exists("MultiFourK",$param) and $param["MultiFourK"] !== null) {
            $this->MultiFourK = $param["MultiFourK"];
        }

        if (array_key_exists("MultiOnline",$param) and $param["MultiOnline"] !== null) {
            $this->MultiOnline = $param["MultiOnline"];
        }

        if (array_key_exists("DeductDuration",$param) and $param["DeductDuration"] !== null) {
            $this->DeductDuration = $param["DeductDuration"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
