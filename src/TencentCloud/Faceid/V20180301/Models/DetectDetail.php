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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 活体一比一详情
 *
 * @method string getReqTime() 获取<p>请求时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReqTime(string $ReqTime) 设置<p>请求时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeq() 获取<p>本次活体一比一请求的唯一标记。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeq(string $Seq) 设置<p>本次活体一比一请求的唯一标记。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdcard() 获取<p>参与本次活体一比一的身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdcard(string $Idcard) 设置<p>参与本次活体一比一的身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>参与本次活体一比一的姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>参与本次活体一比一的姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSim() 获取<p>本次活体一比一的相似度。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSim(string $Sim) 设置<p>本次活体一比一的相似度。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsNeedCharge() 获取<p>本次活体一比一是否收费</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNeedCharge(boolean $IsNeedCharge) 设置<p>本次活体一比一是否收费</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrcode() 获取<p>本次活体一比一最终结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrcode(integer $Errcode) 设置<p>本次活体一比一最终结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrmsg() 获取<p>本次活体一比一最终结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrmsg(string $Errmsg) 设置<p>本次活体一比一最终结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLivestatus() 获取<p>本次活体结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivestatus(integer $Livestatus) 设置<p>本次活体结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLivemsg() 获取<p>本次活体结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivemsg(string $Livemsg) 设置<p>本次活体结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComparestatus() 获取<p>本次一比一结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComparestatus(integer $Comparestatus) 设置<p>本次一比一结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComparemsg() 获取<p>本次一比一结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComparemsg(string $Comparemsg) 设置<p>本次一比一结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompareLibType() 获取<p>比对库源类型。包括：商业库；业务方自有库（用户上传照片、客户的混合库、混合部署库）；二次验证库；人工审核库；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareLibType(string $CompareLibType) 设置<p>比对库源类型。包括：商业库；业务方自有库（用户上传照片、客户的混合库、混合部署库）；二次验证库；人工审核库；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLivenessMode() 获取<p>枚举活体检测类型：<br>0：未知<br>1：数字活体<br>2：动作活体<br>3：静默活体<br>4：一闪活体（动作+光线）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessMode(integer $LivenessMode) 设置<p>枚举活体检测类型：<br>0：未知<br>1：数字活体<br>2：动作活体<br>3：静默活体<br>4：一闪活体（动作+光线）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetectDetail extends AbstractModel
{
    /**
     * @var string <p>请求时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReqTime;

    /**
     * @var string <p>本次活体一比一请求的唯一标记。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seq;

    /**
     * @var string <p>参与本次活体一比一的身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Idcard;

    /**
     * @var string <p>参与本次活体一比一的姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>本次活体一比一的相似度。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sim;

    /**
     * @var boolean <p>本次活体一比一是否收费</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNeedCharge;

    /**
     * @var integer <p>本次活体一比一最终结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errcode;

    /**
     * @var string <p>本次活体一比一最终结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errmsg;

    /**
     * @var integer <p>本次活体结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Livestatus;

    /**
     * @var string <p>本次活体结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Livemsg;

    /**
     * @var integer <p>本次一比一结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comparestatus;

    /**
     * @var string <p>本次一比一结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comparemsg;

    /**
     * @var string <p>比对库源类型。包括：商业库；业务方自有库（用户上传照片、客户的混合库、混合部署库）；二次验证库；人工审核库；</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareLibType;

    /**
     * @var integer <p>枚举活体检测类型：<br>0：未知<br>1：数字活体<br>2：动作活体<br>3：静默活体<br>4：一闪活体（动作+光线）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessMode;

    /**
     * @param string $ReqTime <p>请求时间戳。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Seq <p>本次活体一比一请求的唯一标记。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Idcard <p>参与本次活体一比一的身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>参与本次活体一比一的姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sim <p>本次活体一比一的相似度。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsNeedCharge <p>本次活体一比一是否收费</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Errcode <p>本次活体一比一最终结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Errmsg <p>本次活体一比一最终结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Livestatus <p>本次活体结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Livemsg <p>本次活体结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Comparestatus <p>本次一比一结果。0为成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comparemsg <p>本次一比一结果描述。（仅描述用，文案更新时不会通知。）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompareLibType <p>比对库源类型。包括：商业库；业务方自有库（用户上传照片、客户的混合库、混合部署库）；二次验证库；人工审核库；</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LivenessMode <p>枚举活体检测类型：<br>0：未知<br>1：数字活体<br>2：动作活体<br>3：静默活体<br>4：一闪活体（动作+光线）</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ReqTime",$param) and $param["ReqTime"] !== null) {
            $this->ReqTime = $param["ReqTime"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("Idcard",$param) and $param["Idcard"] !== null) {
            $this->Idcard = $param["Idcard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("IsNeedCharge",$param) and $param["IsNeedCharge"] !== null) {
            $this->IsNeedCharge = $param["IsNeedCharge"];
        }

        if (array_key_exists("Errcode",$param) and $param["Errcode"] !== null) {
            $this->Errcode = $param["Errcode"];
        }

        if (array_key_exists("Errmsg",$param) and $param["Errmsg"] !== null) {
            $this->Errmsg = $param["Errmsg"];
        }

        if (array_key_exists("Livestatus",$param) and $param["Livestatus"] !== null) {
            $this->Livestatus = $param["Livestatus"];
        }

        if (array_key_exists("Livemsg",$param) and $param["Livemsg"] !== null) {
            $this->Livemsg = $param["Livemsg"];
        }

        if (array_key_exists("Comparestatus",$param) and $param["Comparestatus"] !== null) {
            $this->Comparestatus = $param["Comparestatus"];
        }

        if (array_key_exists("Comparemsg",$param) and $param["Comparemsg"] !== null) {
            $this->Comparemsg = $param["Comparemsg"];
        }

        if (array_key_exists("CompareLibType",$param) and $param["CompareLibType"] !== null) {
            $this->CompareLibType = $param["CompareLibType"];
        }

        if (array_key_exists("LivenessMode",$param) and $param["LivenessMode"] !== null) {
            $this->LivenessMode = $param["LivenessMode"];
        }
    }
}
