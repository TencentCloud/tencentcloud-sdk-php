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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书操作日志。
 *
 * @method string getAction() 获取操作证书动作。
 * @method void setAction(string $Action) 设置操作证书动作。
 * @method string getCreatedOn() 获取操作时间。
 * @method void setCreatedOn(string $CreatedOn) 设置操作时间。
 * @method string getUin() 获取主账号
 * @method void setUin(string $Uin) 设置主账号
 * @method string getSubAccountUin() 获取子账号
 * @method void setSubAccountUin(string $SubAccountUin) 设置子账号
 * @method string getCertId() 获取证书ID
 * @method void setCertId(string $CertId) 设置证书ID
 * @method string getType() 获取每个操作类型都对应一个具体的操作描述。以下是对每个操作类型及其描述的文字说明：
1. apply - 表示申请一个免费的证书。
2. delete - 表示删除操作。
3. download - 表示下载操作。
4. upload - 表示上传操作。
5. revoke - 表示吊销证书。
6. cancelRevoke - 表示取消吊销操作。
7. updateAlias - 表示更新备注信息。
8. changeProject - 表示将证书分配到某个项目。
9. uploadConfirmLetter - 表示上传确认函。
10. cancel - 表示取消订单操作。
11. replace - 表示重颁发证书。
12. downloadConfirmLetter - 表示下载证书吊销确认函。
13. editRevokeLetter - 表示上传证书吊销确认函。
14. renewVIP - 表示续费付费证书。
15. applyVIP - 表示申请付费证书。
16. submitInfo - 表示提交资料。
17. downloadConfirmLetter - 表示下载确认函模版。
18. uploadFromYunAPI - 表示通过云 API 上传。
19. transferIn - 表示证书转入操作。
20. transferOut - 表示证书转出操作。
21. refund - 表示申请退款。
22. multiYearsRenew - 表示多年期自动续期。
23. modifyDownloadLimit - 表示修改下载限制开关。
24. issued - 表示证书签发。
25. domainValidationPassed - 表示域名验证完成。
26. Resubmit - 表示证书重新申请。
 * @method void setType(string $Type) 设置每个操作类型都对应一个具体的操作描述。以下是对每个操作类型及其描述的文字说明：
1. apply - 表示申请一个免费的证书。
2. delete - 表示删除操作。
3. download - 表示下载操作。
4. upload - 表示上传操作。
5. revoke - 表示吊销证书。
6. cancelRevoke - 表示取消吊销操作。
7. updateAlias - 表示更新备注信息。
8. changeProject - 表示将证书分配到某个项目。
9. uploadConfirmLetter - 表示上传确认函。
10. cancel - 表示取消订单操作。
11. replace - 表示重颁发证书。
12. downloadConfirmLetter - 表示下载证书吊销确认函。
13. editRevokeLetter - 表示上传证书吊销确认函。
14. renewVIP - 表示续费付费证书。
15. applyVIP - 表示申请付费证书。
16. submitInfo - 表示提交资料。
17. downloadConfirmLetter - 表示下载确认函模版。
18. uploadFromYunAPI - 表示通过云 API 上传。
19. transferIn - 表示证书转入操作。
20. transferOut - 表示证书转出操作。
21. refund - 表示申请退款。
22. multiYearsRenew - 表示多年期自动续期。
23. modifyDownloadLimit - 表示修改下载限制开关。
24. issued - 表示证书签发。
25. domainValidationPassed - 表示域名验证完成。
26. Resubmit - 表示证书重新申请。
 */
class OperationLog extends AbstractModel
{
    /**
     * @var string 操作证书动作。
     */
    public $Action;

    /**
     * @var string 操作时间。
     */
    public $CreatedOn;

    /**
     * @var string 主账号
     */
    public $Uin;

    /**
     * @var string 子账号
     */
    public $SubAccountUin;

    /**
     * @var string 证书ID
     */
    public $CertId;

    /**
     * @var string 每个操作类型都对应一个具体的操作描述。以下是对每个操作类型及其描述的文字说明：
1. apply - 表示申请一个免费的证书。
2. delete - 表示删除操作。
3. download - 表示下载操作。
4. upload - 表示上传操作。
5. revoke - 表示吊销证书。
6. cancelRevoke - 表示取消吊销操作。
7. updateAlias - 表示更新备注信息。
8. changeProject - 表示将证书分配到某个项目。
9. uploadConfirmLetter - 表示上传确认函。
10. cancel - 表示取消订单操作。
11. replace - 表示重颁发证书。
12. downloadConfirmLetter - 表示下载证书吊销确认函。
13. editRevokeLetter - 表示上传证书吊销确认函。
14. renewVIP - 表示续费付费证书。
15. applyVIP - 表示申请付费证书。
16. submitInfo - 表示提交资料。
17. downloadConfirmLetter - 表示下载确认函模版。
18. uploadFromYunAPI - 表示通过云 API 上传。
19. transferIn - 表示证书转入操作。
20. transferOut - 表示证书转出操作。
21. refund - 表示申请退款。
22. multiYearsRenew - 表示多年期自动续期。
23. modifyDownloadLimit - 表示修改下载限制开关。
24. issued - 表示证书签发。
25. domainValidationPassed - 表示域名验证完成。
26. Resubmit - 表示证书重新申请。
     */
    public $Type;

    /**
     * @param string $Action 操作证书动作。
     * @param string $CreatedOn 操作时间。
     * @param string $Uin 主账号
     * @param string $SubAccountUin 子账号
     * @param string $CertId 证书ID
     * @param string $Type 每个操作类型都对应一个具体的操作描述。以下是对每个操作类型及其描述的文字说明：
1. apply - 表示申请一个免费的证书。
2. delete - 表示删除操作。
3. download - 表示下载操作。
4. upload - 表示上传操作。
5. revoke - 表示吊销证书。
6. cancelRevoke - 表示取消吊销操作。
7. updateAlias - 表示更新备注信息。
8. changeProject - 表示将证书分配到某个项目。
9. uploadConfirmLetter - 表示上传确认函。
10. cancel - 表示取消订单操作。
11. replace - 表示重颁发证书。
12. downloadConfirmLetter - 表示下载证书吊销确认函。
13. editRevokeLetter - 表示上传证书吊销确认函。
14. renewVIP - 表示续费付费证书。
15. applyVIP - 表示申请付费证书。
16. submitInfo - 表示提交资料。
17. downloadConfirmLetter - 表示下载确认函模版。
18. uploadFromYunAPI - 表示通过云 API 上传。
19. transferIn - 表示证书转入操作。
20. transferOut - 表示证书转出操作。
21. refund - 表示申请退款。
22. multiYearsRenew - 表示多年期自动续期。
23. modifyDownloadLimit - 表示修改下载限制开关。
24. issued - 表示证书签发。
25. domainValidationPassed - 表示域名验证完成。
26. Resubmit - 表示证书重新申请。
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
