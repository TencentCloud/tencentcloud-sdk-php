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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getEvilFlag() 获取是否恶意 0：正常 1：可疑
 * @method void setEvilFlag(integer $EvilFlag) 设置是否恶意 0：正常 1：可疑
 * @method integer getEvilType() 获取恶意类型
100：正常 
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
20103：性感
24001：暴恐
21000：综合
 * @method void setEvilType(integer $EvilType) 设置恶意类型
100：正常 
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
20103：性感
24001：暴恐
21000：综合
 * @method ImageHotDetect getHotDetect() 获取图片性感详情
 * @method void setHotDetect(ImageHotDetect $HotDetect) 设置图片性感详情
 * @method ImageIllegalDetect getIllegalDetect() 获取图片违法详情
 * @method void setIllegalDetect(ImageIllegalDetect $IllegalDetect) 设置图片违法详情
 * @method OCRDetect getOCRDetect() 获取图片OCR详情
 * @method void setOCRDetect(OCRDetect $OCRDetect) 设置图片OCR详情
 * @method ImagePolityDetect getPolityDetect() 获取图片涉政详情
 * @method void setPolityDetect(ImagePolityDetect $PolityDetect) 设置图片涉政详情
 * @method ImagePornDetect getPornDetect() 获取图片涉黄详情
 * @method void setPornDetect(ImagePornDetect $PornDetect) 设置图片涉黄详情
 * @method Similar getSimilar() 获取图片相似度详情
 * @method void setSimilar(Similar $Similar) 设置图片相似度详情
 * @method ImageTerrorDetect getTerrorDetect() 获取图片暴恐详情
 * @method void setTerrorDetect(ImageTerrorDetect $TerrorDetect) 设置图片暴恐详情
 */

/**
 *图片识别结果详情
 */
class ImageData extends AbstractModel
{
    /**
     * @var integer 是否恶意 0：正常 1：可疑
     */
    public $EvilFlag;

    /**
     * @var integer 恶意类型
100：正常 
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
20103：性感
24001：暴恐
21000：综合
     */
    public $EvilType;

    /**
     * @var ImageHotDetect 图片性感详情
     */
    public $HotDetect;

    /**
     * @var ImageIllegalDetect 图片违法详情
     */
    public $IllegalDetect;

    /**
     * @var OCRDetect 图片OCR详情
     */
    public $OCRDetect;

    /**
     * @var ImagePolityDetect 图片涉政详情
     */
    public $PolityDetect;

    /**
     * @var ImagePornDetect 图片涉黄详情
     */
    public $PornDetect;

    /**
     * @var Similar 图片相似度详情
     */
    public $Similar;

    /**
     * @var ImageTerrorDetect 图片暴恐详情
     */
    public $TerrorDetect;
    /**
     * @param integer $EvilFlag 是否恶意 0：正常 1：可疑
     * @param integer $EvilType 恶意类型
100：正常 
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
20103：性感
24001：暴恐
21000：综合
     * @param ImageHotDetect $HotDetect 图片性感详情
     * @param ImageIllegalDetect $IllegalDetect 图片违法详情
     * @param OCRDetect $OCRDetect 图片OCR详情
     * @param ImagePolityDetect $PolityDetect 图片涉政详情
     * @param ImagePornDetect $PornDetect 图片涉黄详情
     * @param Similar $Similar 图片相似度详情
     * @param ImageTerrorDetect $TerrorDetect 图片暴恐详情
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
        if (array_key_exists("EvilFlag",$param) and $param["EvilFlag"] !== null) {
            $this->EvilFlag = $param["EvilFlag"];
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("HotDetect",$param) and $param["HotDetect"] !== null) {
            $this->HotDetect = new ImageHotDetect();
            $this->HotDetect->deserialize($param["HotDetect"]);
        }

        if (array_key_exists("IllegalDetect",$param) and $param["IllegalDetect"] !== null) {
            $this->IllegalDetect = new ImageIllegalDetect();
            $this->IllegalDetect->deserialize($param["IllegalDetect"]);
        }

        if (array_key_exists("OCRDetect",$param) and $param["OCRDetect"] !== null) {
            $this->OCRDetect = new OCRDetect();
            $this->OCRDetect->deserialize($param["OCRDetect"]);
        }

        if (array_key_exists("PolityDetect",$param) and $param["PolityDetect"] !== null) {
            $this->PolityDetect = new ImagePolityDetect();
            $this->PolityDetect->deserialize($param["PolityDetect"]);
        }

        if (array_key_exists("PornDetect",$param) and $param["PornDetect"] !== null) {
            $this->PornDetect = new ImagePornDetect();
            $this->PornDetect->deserialize($param["PornDetect"]);
        }

        if (array_key_exists("Similar",$param) and $param["Similar"] !== null) {
            $this->Similar = new Similar();
            $this->Similar->deserialize($param["Similar"]);
        }

        if (array_key_exists("TerrorDetect",$param) and $param["TerrorDetect"] !== null) {
            $this->TerrorDetect = new ImageTerrorDetect();
            $this->TerrorDetect->deserialize($param["TerrorDetect"]);
        }
    }
}
