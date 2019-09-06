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
namespace TencentCloud\Facefusion\V20181201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProjectId() 获取活动 ID，请在人脸融合控制台查看。
 * @method void setProjectId(string $ProjectId) 设置活动 ID，请在人脸融合控制台查看。
 * @method string getModelId() 获取素材 ID，请在人脸融合控制台查看。
 * @method void setModelId(string $ModelId) 设置素材 ID，请在人脸融合控制台查看。
 * @method string getRspImgType() 获取返回图像方式（url 或 base64) ，二选一。url有效期为30天。
 * @method void setRspImgType(string $RspImgType) 设置返回图像方式（url 或 base64) ，二选一。url有效期为30天。
 * @method array getMergeInfos() 获取人脸图片和待被融合的素材模板图的人脸位置信息。
 * @method void setMergeInfos(array $MergeInfos) 设置人脸图片和待被融合的素材模板图的人脸位置信息。
 * @method integer getFuseProfileDegree() 获取脸型融合比例，数值越高，融合后的脸型越像素材人物。取值范围[0,100] 
若此参数不填写，则使用人脸融合控制台中脸型参数数值。
 * @method void setFuseProfileDegree(integer $FuseProfileDegree) 设置脸型融合比例，数值越高，融合后的脸型越像素材人物。取值范围[0,100] 
若此参数不填写，则使用人脸融合控制台中脸型参数数值。
 * @method integer getFuseFaceDegree() 获取五官融合比例，数值越高，融合后的五官越像素材人物。取值范围[0,100] 
若此参数不填写，则使用人脸融合控制台中五官参数数值。
 * @method void setFuseFaceDegree(integer $FuseFaceDegree) 设置五官融合比例，数值越高，融合后的五官越像素材人物。取值范围[0,100] 
若此参数不填写，则使用人脸融合控制台中五官参数数值。
 */

/**
 *FuseFace请求参数结构体
 */
class FuseFaceRequest extends AbstractModel
{
    /**
     * @var string 活动 ID，请在人脸融合控制台查看。
     */
    public $ProjectId;

    /**
     * @var string 素材 ID，请在人脸融合控制台查看。
     */
    public $ModelId;

    /**
     * @var string 返回图像方式（url 或 base64) ，二选一。url有效期为30天。
     */
    public $RspImgType;

    /**
     * @var array 人脸图片和待被融合的素材模板图的人脸位置信息。
     */
    public $MergeInfos;

    /**
     * @var integer 脸型融合比例，数值越高，融合后的脸型越像素材人物。取值范围[0,100] 
若此参数不填写，则使用人脸融合控制台中脸型参数数值。
     */
    public $FuseProfileDegree;

    /**
     * @var integer 五官融合比例，数值越高，融合后的五官越像素材人物。取值范围[0,100] 
若此参数不填写，则使用人脸融合控制台中五官参数数值。
     */
    public $FuseFaceDegree;
    /**
     * @param string $ProjectId 活动 ID，请在人脸融合控制台查看。
     * @param string $ModelId 素材 ID，请在人脸融合控制台查看。
     * @param string $RspImgType 返回图像方式（url 或 base64) ，二选一。url有效期为30天。
     * @param array $MergeInfos 人脸图片和待被融合的素材模板图的人脸位置信息。
     * @param integer $FuseProfileDegree 脸型融合比例，数值越高，融合后的脸型越像素材人物。取值范围[0,100] 
若此参数不填写，则使用人脸融合控制台中脸型参数数值。
     * @param integer $FuseFaceDegree 五官融合比例，数值越高，融合后的五官越像素材人物。取值范围[0,100] 
若此参数不填写，则使用人脸融合控制台中五官参数数值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }

        if (array_key_exists("MergeInfos",$param) and $param["MergeInfos"] !== null) {
            $this->MergeInfos = [];
            foreach ($param["MergeInfos"] as $key => $value){
                $obj = new MergeInfo();
                $obj->deserialize($value);
                array_push($this->MergeInfos, $obj);
            }
        }

        if (array_key_exists("FuseProfileDegree",$param) and $param["FuseProfileDegree"] !== null) {
            $this->FuseProfileDegree = $param["FuseProfileDegree"];
        }

        if (array_key_exists("FuseFaceDegree",$param) and $param["FuseFaceDegree"] !== null) {
            $this->FuseFaceDegree = $param["FuseFaceDegree"];
        }
    }
}
